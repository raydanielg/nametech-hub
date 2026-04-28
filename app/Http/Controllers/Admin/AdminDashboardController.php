<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Startup;
use App\Models\Payment;
use App\Models\SupportTicket;
use App\Models\Enrollment;
use App\Models\AcademyCourse;
use App\Models\Setting;
use App\Models\ApiKey;
use App\Models\AuditLog;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:super_admin']);
    }

    // DASHBOARD
    public function index() 
    { 
        $stats = $this->buildDashboardStats();
        $activity = $this->buildRecentActivity();

        return view('admin.dashboard.main', compact('stats', 'activity')); 
    }

    public function stats(): JsonResponse
    {
        return response()->json([
            'stats' => $this->buildDashboardStats(),
            'generated_at' => now()->toIso8601String(),
        ]);
    }

    public function activity(): JsonResponse
    {
        return response()->json([
            'activity' => $this->buildRecentActivity(),
            'generated_at' => now()->toIso8601String(),
        ]);
    }

    public function health(): JsonResponse
    {
        $payload = $this->buildSystemHealthPayload();

        return response()->json($payload);
    }

    public function systemStatusData(): JsonResponse
    {
        return response()->json($this->buildSystemHealthPayload());
    }

    private function buildSystemHealthPayload(): array
    {
        $checks = [
            'database' => true,
            'cache' => true,
            'storage' => true,
        ];

        try {
            DB::select('select 1');
        } catch (\Throwable $e) {
            $checks['database'] = false;
        }

        try {
            $key = 'healthcheck:' . uniqid('', true);
            Cache::put($key, 'ok', 10);
            $checks['cache'] = Cache::get($key) === 'ok';
        } catch (\Throwable $e) {
            $checks['cache'] = false;
        }

        try {
            $checks['storage'] = is_writable(storage_path());
        } catch (\Throwable $e) {
            $checks['storage'] = false;
        }

        $status = collect($checks)->every(fn ($v) => $v === true) ? 'ok' : 'degraded';

        $diskFree = null;
        $diskTotal = null;
        try {
            $diskFree = @disk_free_space(base_path());
            $diskTotal = @disk_total_space(base_path());
        } catch (\Throwable $e) {
        }

        return [
            'status' => $status,
            'checks' => $checks,
            'meta' => [
                'app_env' => (string) config('app.env'),
                'app_debug' => (bool) config('app.debug'),
                'php_version' => PHP_VERSION,
                'laravel_version' => app()->version(),
                'cache_driver' => (string) config('cache.default'),
                'queue_connection' => (string) config('queue.default'),
                'mail_driver' => (string) config('mail.default'),
                'memory_usage_mb' => round(memory_get_usage(true) / 1024 / 1024, 1),
                'disk_free_gb' => $diskFree ? round($diskFree / 1024 / 1024 / 1024, 2) : null,
                'disk_total_gb' => $diskTotal ? round($diskTotal / 1024 / 1024 / 1024, 2) : null,
            ],
            'generated_at' => now()->toIso8601String(),
        ];
    }

    private function buildDashboardStats(): array
    {
        $now = now();

        return [
            // Users
            'total_users' => User::count(),
            'new_users_today' => User::whereDate('created_at', today())->count(),

            // Startups
            'total_startups' => Startup::count(),
            'active_startups' => Startup::where('status', 'active')->count(),

            // Academy
            'active_courses' => AcademyCourse::active()->count(),
            'total_enrollments' => Enrollment::count(),
            'certificates_issued' => Enrollment::whereNotNull('certificate_url')->count(),
            'completed_this_month' => Enrollment::whereNotNull('completed_at')
                ->whereBetween('completed_at', [$now->copy()->startOfMonth(), $now->copy()->endOfMonth()])
                ->count(),

            // Finance
            'revenue_total' => (float) Payment::where('status', 'success')->sum('amount'),
            'revenue_today' => (float) Payment::where('status', 'success')->whereDate('paid_at', today())->sum('amount'),
            'revenue_mtd' => (float) Payment::where('status', 'success')
                ->whereBetween('paid_at', [$now->copy()->startOfMonth(), $now->copy()->endOfMonth()])
                ->sum('amount'),

            // Support
            'open_tickets' => SupportTicket::where('status', 'open')->count(),
            'urgent_tickets' => SupportTicket::where('status', 'open')->where('priority', 'urgent')->count(),
        ];
    }

    private function buildRecentActivity(int $limit = 10): array
    {
        $items = [];

        $users = User::select(['id', 'first_name', 'last_name', 'email', 'created_at'])
            ->latest('created_at')
            ->limit($limit)
            ->get();

        foreach ($users as $user) {
            $items[] = [
                'type' => 'user_registered',
                'title' => 'New user registered',
                'description' => trim(($user->first_name . ' ' . $user->last_name)) ?: $user->email,
                'time' => $user->created_at?->diffForHumans(),
                'timestamp' => $user->created_at?->toIso8601String(),
            ];
        }

        $tickets = SupportTicket::select(['id', 'ticket_number', 'subject', 'priority', 'status', 'created_at'])
            ->latest('created_at')
            ->limit($limit)
            ->get();

        foreach ($tickets as $ticket) {
            $items[] = [
                'type' => 'ticket_created',
                'title' => 'New support ticket',
                'description' => $ticket->ticket_number . ' • ' . $ticket->subject,
                'time' => $ticket->created_at?->diffForHumans(),
                'timestamp' => $ticket->created_at?->toIso8601String(),
                'meta' => [
                    'priority' => $ticket->priority,
                    'status' => $ticket->status,
                ],
            ];
        }

        $payments = Payment::select(['id', 'amount', 'currency', 'status', 'paid_at', 'created_at'])
            ->latest('paid_at')
            ->limit($limit)
            ->get();

        foreach ($payments as $payment) {
            $items[] = [
                'type' => 'payment_updated',
                'title' => 'Payment ' . ($payment->status ?? 'updated'),
                'description' => ($payment->currency ?? 'USD') . ' ' . number_format((float) $payment->amount, 2),
                'time' => ($payment->paid_at ?? $payment->created_at)?->diffForHumans(),
                'timestamp' => ($payment->paid_at ?? $payment->created_at)?->toIso8601String(),
                'meta' => [
                    'status' => $payment->status,
                ],
            ];
        }

        usort($items, function ($a, $b) {
            return strcmp($b['timestamp'] ?? '', $a['timestamp'] ?? '');
        });

        return array_slice($items, 0, $limit);
    }

    // USER MANAGEMENT
    public function users() 
    { 
        $users = User::with('roles')->latest()->paginate(10);
        return view('admin.users.index', compact('users')); 
    }

    public function addUser() 
    { 
        $roles = Role::all();
        return view('admin.users.create', compact('roles')); 
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|exists:roles,name',
        ]);

        $user = User::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            'role' => $request->role,
            'status' => 'active',
            'email_verified' => true,
        ]);

        $user->assignRole($request->role);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function editUser(string $id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function updateUser(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'role' => 'required|exists:roles,name',
            'status' => 'required|in:active,pending_verification,suspended',
        ]);

        $user->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'role' => $validated['role'],
            'status' => $validated['status'],
        ]);

        $user->syncRoles([$validated['role']]);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroyUser(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User moved to trash.');
    }

    public function restoreUser(string $id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();

        return redirect()->route('admin.users.deleted')->with('success', 'User restored successfully.');
    }

    public function approveUser(string $id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'active', 'email_verified' => true]);

        return redirect()->route('admin.users.pending')->with('success', 'User approved successfully.');
    }

    public function rejectUser(string $id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'rejected']);

        return redirect()->route('admin.users.pending')->with('success', 'User rejected.');
    }

    public function roles() 
    { 
        $roles = Role::withCount('users')->get();
        $permissions = \Spatie\Permission\Models\Permission::all()->groupBy('group');
        return view('admin.users.roles', compact('roles', 'permissions')); 
    }

    public function storeRole(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'nullable|array',
        ]);

        $role = Role::create(['name' => $validated['name'], 'guard_name' => 'web']);

        if (!empty($validated['permissions'])) {
            $role->syncPermissions($validated['permissions']);
        }

        return redirect()->route('admin.users.roles')->with('success', 'Role created successfully.');
    }

    public function updateRole(Request $request, string $id)
    {
        $role = Role::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
            'permissions' => 'nullable|array',
        ]);

        $role->update(['name' => $validated['name']]);
        $role->syncPermissions($validated['permissions'] ?? []);

        return redirect()->route('admin.users.roles')->with('success', 'Role updated successfully.');
    }

    public function destroyRole(string $id)
    {
        $role = Role::findOrFail($id);

        if ($role->users()->count() > 0) {
            return redirect()->route('admin.users.roles')->with('error', 'Cannot delete role with assigned users.');
        }

        $role->delete();

        return redirect()->route('admin.users.roles')->with('success', 'Role deleted successfully.');
    }

    public function pendingUsers() 
    { 
        $users = User::where('status', 'pending_verification')->with('roles')->latest()->paginate(10);
        $stats = [
            'total_pending' => User::where('status', 'pending_verification')->count(),
            'pending_today' => User::where('status', 'pending_verification')->whereDate('created_at', today())->count(),
        ];
        return view('admin.users.pending', compact('users', 'stats')); 
    }

    public function deletedUsers() 
    { 
        $users = User::onlyTrashed()->with('roles')->latest()->paginate(10);
        $stats = [
            'total_deleted' => User::onlyTrashed()->count(),
            'deleted_this_month' => User::onlyTrashed()->whereMonth('deleted_at', now()->month)->count(),
        ];
        return view('admin.users.deleted', compact('users', 'stats')); 
    }

    // HUB MANAGEMENT
    public function memberships() 
    { 
        $memberships = \App\Models\Membership::with('user')->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Membership::count(),
            'active' => \App\Models\Membership::where('status', 'active')->count(),
            'expiring_soon' => \App\Models\Membership::where('end_date', '<=', now()->addDays(30))->where('status', 'active')->count(),
        ];
        return view('admin.hub.memberships', compact('memberships', 'stats')); 
    }
    
    public function members() 
    { 
        $members = User::whereHas('roles', function($q) {
            $q->whereIn('name', ['hub_director', 'mentor', 'startup_founder', 'student']);
        })->with('roles')->latest()->paginate(10);
        return view('admin.hub.members', compact('members')); 
    }
    
    public function coworking() { return view('admin.hub.coworking'); }
    public function meetingRooms() { return view('admin.hub.meeting-rooms'); }
    public function hubSettings() { return view('admin.hub.settings'); }

    // PROGRAMS
    public function launchpad() 
    { 
        $startups = \App\Models\Startup::where('program_type', 'launchpad')->with(['founder', 'cohort'])->latest()->paginate(10);
        $stats = [
            'total_startups' => \App\Models\Startup::where('program_type', 'launchpad')->count(),
            'active' => \App\Models\Startup::where('program_type', 'launchpad')->where('status', 'active')->count(),
            'graduated' => \App\Models\Startup::where('program_type', 'launchpad')->where('status', 'graduated')->count(),
        ];
        return view('admin.programs.launchpad', compact('startups', 'stats')); 
    }
    
    public function scale() 
    { 
        $startups = \App\Models\Startup::where('program_type', 'scale')->with(['founder', 'cohort'])->latest()->paginate(10);
        $stats = [
            'total_startups' => \App\Models\Startup::where('program_type', 'scale')->count(),
            'active' => \App\Models\Startup::where('program_type', 'scale')->where('status', 'active')->count(),
            'funded' => \App\Models\Startup::where('program_type', 'scale')->where('funding_status', 'funded')->count(),
        ];
        return view('admin.programs.scale', compact('startups', 'stats')); 
    }
    
    public function applications() 
    { 
        $applications = \App\Models\ProgramApplication::with(['user', 'startup'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\ProgramApplication::count(),
            'pending' => \App\Models\ProgramApplication::where('status', 'pending')->count(),
            'approved' => \App\Models\ProgramApplication::where('status', 'approved')->count(),
            'rejected' => \App\Models\ProgramApplication::where('status', 'rejected')->count(),
        ];
        return view('admin.programs.applications', compact('applications', 'stats')); 
    }
    
    public function cohorts() 
    { 
        $cohorts = \App\Models\Cohort::withCount('startups')->latest()->paginate(10);
        return view('admin.programs.cohorts', compact('cohorts')); 
    }
    
    public function milestones() 
    { 
        $milestones = \App\Models\Milestone::with(['startup', 'programApplication'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Milestone::count(),
            'completed' => \App\Models\Milestone::where('status', 'completed')->count(),
            'pending' => \App\Models\Milestone::where('status', 'pending')->count(),
            'overdue' => \App\Models\Milestone::where('due_date', '<', now())->where('status', '!=', 'completed')->count(),
        ];
        return view('admin.programs.milestones', compact('milestones', 'stats')); 
    }
    
    public function demoDay() { return view('admin.programs.demo-day'); }

    // STUDIO
    public function studioProjects() 
    { 
        $projects = \App\Models\StudioProject::with(['client', 'developers'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\StudioProject::count(),
            'active' => \App\Models\StudioProject::where('status', 'active')->count(),
            'completed' => \App\Models\StudioProject::where('status', 'completed')->count(),
            'overdue' => \App\Models\StudioProject::where('deadline', '<', now())->where('status', '!=', 'completed')->count(),
        ];
        return view('admin.studio.projects', compact('projects', 'stats')); 
    }
    
    public function studioClients() 
    { 
        $clients = \App\Models\StudioClient::withCount('projects')->latest()->paginate(10);
        return view('admin.studio.clients', compact('clients')); 
    }
    
    public function studioDevelopers() 
    { 
        $developers = User::whereHas('roles', function($q) {
            $q->where('name', 'developer');
        })->withCount('studioProjects')->latest()->paginate(10);
        return view('admin.studio.developers', compact('developers')); 
    }
    
    // STUDIO PROJECTS
    public function addStudioProject() 
    { 
        $clients = \App\Models\StudioClient::all();
        $developers = User::whereHas('roles', function($q) { $q->where('name', 'developer'); })->get();
        return view('admin.studio.projects-add', compact('clients', 'developers')); 
    }
    
    public function storeStudioProject(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'client_id' => 'required|exists:studio_clients,id',
            'developers' => 'nullable|array',
            'developers.*' => 'exists:users,id',
            'status' => 'required|in:planning,active,completed,paused,cancelled',
            'priority' => 'required|in:low,medium,high,urgent',
            'budget' => 'nullable|numeric',
            'deadline' => 'nullable|date',
            'start_date' => 'nullable|date',
        ]);

        $project = \App\Models\StudioProject::create($validated);
        
        if (!empty($validated['developers'])) {
            $project->developers()->attach($validated['developers']);
        }

        return redirect()->route('admin.studio.projects')->with('success', 'Project created successfully.');
    }
    
    public function editStudioProject($id)
    {
        $project = \App\Models\StudioProject::with(['client', 'developers'])->findOrFail($id);
        $clients = \App\Models\StudioClient::all();
        $developers = User::whereHas('roles', function($q) { $q->where('name', 'developer'); })->get();
        return view('admin.studio.projects-edit', compact('project', 'clients', 'developers'));
    }
    
    public function updateStudioProject(Request $request, $id)
    {
        $project = \App\Models\StudioProject::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'client_id' => 'required|exists:studio_clients,id',
            'developers' => 'nullable|array',
            'developers.*' => 'exists:users,id',
            'status' => 'required|in:planning,active,completed,paused,cancelled',
            'priority' => 'required|in:low,medium,high,urgent',
            'budget' => 'nullable|numeric',
            'deadline' => 'nullable|date',
            'start_date' => 'nullable|date',
        ]);

        $project->update($validated);
        $project->developers()->sync($validated['developers'] ?? []);

        return redirect()->route('admin.studio.projects')->with('success', 'Project updated successfully.');
    }
    
    public function destroyStudioProject($id)
    {
        $project = \App\Models\StudioProject::findOrFail($id);
        $project->delete();
        
        return redirect()->route('admin.studio.projects')->with('success', 'Project deleted successfully.');
    }

    // STUDIO CLIENTS
    public function addStudioClient() 
    { 
        return view('admin.studio.clients-add'); 
    }
    
    public function storeStudioClient(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:studio_clients,email',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'website' => 'nullable|url',
            'contact_person' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,prospect',
        ]);

        \App\Models\StudioClient::create($validated);

        return redirect()->route('admin.studio.clients')->with('success', 'Client added successfully.');
    }
    
    public function editStudioClient($id)
    {
        $client = \App\Models\StudioClient::findOrFail($id);
        return view('admin.studio.clients-edit', compact('client'));
    }
    
    public function updateStudioClient(Request $request, $id)
    {
        $client = \App\Models\StudioClient::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:studio_clients,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'website' => 'nullable|url',
            'contact_person' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,prospect',
        ]);

        $client->update($validated);

        return redirect()->route('admin.studio.clients')->with('success', 'Client updated successfully.');
    }
    
    public function destroyStudioClient($id)
    {
        $client = \App\Models\StudioClient::findOrFail($id);
        $client->delete();
        
        return redirect()->route('admin.studio.clients')->with('success', 'Client deleted successfully.');
    }

    // STUDIO DEVELOPERS
    public function addStudioDeveloper() 
    { 
        $users = User::whereDoesntHave('roles', function($q) { 
            $q->where('name', 'developer'); 
        })->get();
        return view('admin.studio.developers-add', compact('users')); 
    }
    
    public function storeStudioDeveloper(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id|unique:studio_developers,user_id',
            'skills' => 'nullable|array',
            'skills.*' => 'string',
            'hourly_rate' => 'nullable|numeric',
            'availability' => 'required|in:full_time,part_time,contract,freelance',
            'experience_years' => 'nullable|integer|min:0',
        ]);

        $user = User::findOrFail($validated['user_id']);
        $user->assignRole('developer');
        
        \App\Models\StudioDeveloper::create($validated);

        return redirect()->route('admin.studio.developers')->with('success', 'Developer added successfully.');
    }
    
    public function editStudioDeveloper($id)
    {
        $developer = \App\Models\StudioDeveloper::with('user')->findOrFail($id);
        return view('admin.studio.developers-edit', compact('developer'));
    }
    
    public function updateStudioDeveloper(Request $request, $id)
    {
        $developer = \App\Models\StudioDeveloper::findOrFail($id);
        
        $validated = $request->validate([
            'skills' => 'nullable|array',
            'skills.*' => 'string',
            'hourly_rate' => 'nullable|numeric',
            'availability' => 'required|in:full_time,part_time,contract,freelance',
            'experience_years' => 'nullable|integer|min:0',
        ]);

        $developer->update($validated);

        return redirect()->route('admin.studio.developers')->with('success', 'Developer updated successfully.');
    }
    
    public function destroyStudioDeveloper($id)
    {
        $developer = \App\Models\StudioDeveloper::findOrFail($id);
        $developer->user->removeRole('developer');
        $developer->delete();
        
        return redirect()->route('admin.studio.developers')->with('success', 'Developer removed successfully.');
    }

    // STUDIO REPOSITORIES
    public function studioRepos() 
    { 
        $repos = \App\Models\StudioRepository::with(['project', 'developers'])->latest()->paginate(10);
        return view('admin.studio.repos', compact('repos')); 
    }
    
    public function addStudioRepo() 
    { 
        $projects = \App\Models\StudioProject::all();
        $developers = User::whereHas('roles', function($q) { $q->where('name', 'developer'); })->get();
        return view('admin.studio.repos-add', compact('projects', 'developers')); 
    }
    
    public function storeStudioRepo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'nullable|exists:studio_projects,id',
            'developers' => 'nullable|array',
            'developers.*' => 'exists:users,id',
            'repository_url' => 'required|url',
            'branch' => 'required|string|max:255',
            'language' => 'nullable|string|max:100',
            'status' => 'required|in:active,archived,deprecated',
        ]);

        $repo = \App\Models\StudioRepository::create($validated);
        
        if (!empty($validated['developers'])) {
            $repo->developers()->attach($validated['developers']);
        }

        return redirect()->route('admin.studio.repos')->with('success', 'Repository added successfully.');
    }
    
    public function editStudioRepo($id)
    {
        $repo = \App\Models\StudioRepository::with(['project', 'developers'])->findOrFail($id);
        $projects = \App\Models\StudioProject::all();
        $developers = User::whereHas('roles', function($q) { $q->where('name', 'developer'); })->get();
        return view('admin.studio.repos-edit', compact('repo', 'projects', 'developers'));
    }
    
    public function updateStudioRepo(Request $request, $id)
    {
        $repo = \App\Models\StudioRepository::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'nullable|exists:studio_projects,id',
            'developers' => 'nullable|array',
            'developers.*' => 'exists:users,id',
            'repository_url' => 'required|url',
            'branch' => 'required|string|max:255',
            'language' => 'nullable|string|max:100',
            'status' => 'required|in:active,archived,deprecated',
        ]);

        $repo->update($validated);
        $repo->developers()->sync($validated['developers'] ?? []);

        return redirect()->route('admin.studio.repos')->with('success', 'Repository updated successfully.');
    }
    
    public function destroyStudioRepo($id)
    {
        $repo = \App\Models\StudioRepository::findOrFail($id);
        $repo->delete();
        
        return redirect()->route('admin.studio.repos')->with('success', 'Repository deleted successfully.');
    }

    // STUDIO SETTINGS
    public function studioSettings() 
    { 
        $settings = [
            'studio_name' => Setting::get('studio_name', 'Namtech Studio'),
            'studio_email' => Setting::get('studio_email', 'studio@namtech-hub.com'),
            'studio_phone' => Setting::get('studio_phone', '+255 712 345 678'),
            'studio_address' => Setting::get('studio_address', 'Dar es Salaam, Tanzania'),
            'default_hourly_rate' => Setting::get('studio_default_hourly_rate', 50),
            'working_hours' => Setting::get('studio_working_hours', '9:00 - 17:00'),
            'timezone' => Setting::get('studio_timezone', 'Africa/Dar_es_Salaam'),
        ];
        return view('admin.studio.settings', compact('settings')); 
    }
    
    public function storeStudioSettings(Request $request)
    {
        $validated = $request->validate([
            'studio_name' => 'required|string|max:255',
            'studio_email' => 'required|email',
            'studio_phone' => 'required|string|max:20',
            'studio_address' => 'required|string',
            'default_hourly_rate' => 'required|numeric|min:0',
            'working_hours' => 'required|string',
            'timezone' => 'required|string',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.studio.settings')->with('success', 'Studio settings updated successfully.');
    }

    // ACADEMY
    public function academyCourses() 
    { 
        $courses = \App\Models\AcademyCourse::withCount('enrollments')->latest()->paginate(10);
        $stats = [
            'total_courses' => \App\Models\AcademyCourse::count(),
            'active_courses' => \App\Models\AcademyCourse::where('status', 'active')->count(),
            'total_enrollments' => \App\Models\Enrollment::count(),
        ];
        return view('admin.academy.courses', compact('courses', 'stats')); 
    }

    public function academyAddCourse() { return view('admin.academy.create-course'); }

    public function academyStoreCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string',
        ]);

        \App\Models\AcademyCourse::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'title' => $request->title,
            'slug' => \Illuminate\Support\Str::slug($request->title),
            'description' => $request->description,
            'duration' => $request->duration,
            'status' => 'active',
        ]);

        return redirect()->route('admin.academy.courses')->with('success', 'Course created successfully.');
    }

    public function academyStudents() 
    { 
        $students = User::whereHas('roles', function($q) {
            $q->where('name', 'student');
        })->withCount('enrollments')->latest()->paginate(10);
        return view('admin.academy.students', compact('students')); 
    }

    public function academyEnrollments() 
    { 
        $enrollments = \App\Models\Enrollment::with(['user', 'academyCourse'])->latest()->paginate(10);
        return view('admin.academy.enrollments', compact('enrollments')); 
    }

    public function academyCertificates() 
    { 
        // Logic kwa ajili ya vyeti (tunaweza kuongeza kama kuna model ya certificates au kutumia enrollments status)
        return view('admin.academy.certificates'); 
    }

    // ACADEMY COURSES
    public function academyEditCourse($id)
    {
        $course = \App\Models\AcademyCourse::findOrFail($id);
        return view('admin.academy.edit-course', compact('course'));
    }
    
    public function academyUpdateCourse(Request $request, $id)
    {
        $course = \App\Models\AcademyCourse::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string',
            'price' => 'nullable|numeric|min:0',
            'status' => 'required|in:active,inactive,draft',
            'level' => 'required|in:beginner,intermediate,advanced',
            'category' => 'nullable|string|max:255',
            'instructor' => 'nullable|string|max:255',
        ]);

        $course->update($validated);

        return redirect()->route('admin.academy.courses')->with('success', 'Course updated successfully.');
    }
    
    public function academyDestroyCourse($id)
    {
        $course = \App\Models\AcademyCourse::findOrFail($id);
        $course->delete();
        
        return redirect()->route('admin.academy.courses')->with('success', 'Course deleted successfully.');
    }

    // ACADEMY STUDENTS
    public function academyAddStudent() 
    { 
        $courses = \App\Models\AcademyCourse::where('status', 'active')->get();
        return view('admin.academy.add-student', compact('courses')); 
    }
    
    public function academyStoreStudent(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|string|min:8',
            'courses' => 'nullable|array',
            'courses.*' => 'exists:academy_courses,id',
        ]);

        $user = User::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => \Illuminate\Support\Facades\Hash::make($validated['password']),
            'status' => 'active',
            'email_verified' => true,
        ]);

        $user->assignRole('student');

        // Enroll in selected courses
        if (!empty($validated['courses'])) {
            foreach ($validated['courses'] as $courseId) {
                \App\Models\Enrollment::create([
                    'user_id' => $user->id,
                    'academy_course_id' => $courseId,
                    'status' => 'active',
                    'enrolled_at' => now(),
                ]);
            }
        }

        return redirect()->route('admin.academy.students')->with('success', 'Student added successfully.');
    }
    
    public function academyEditStudent($id)
    {
        $student = User::whereHas('roles', function($q) {
            $q->where('name', 'student');
        })->with('enrollments.academyCourse')->findOrFail($id);
        
        return view('admin.academy.edit-student', compact('student'));
    }
    
    public function academyUpdateStudent(Request $request, $id)
    {
        $student = User::findOrFail($id);
        
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'status' => 'required|in:active,inactive,suspended',
        ]);

        $student->update($validated);

        return redirect()->route('admin.academy.students')->with('success', 'Student updated successfully.');
    }
    
    public function academyDestroyStudent($id)
    {
        $student = User::findOrFail($id);
        $student->delete();
        
        return redirect()->route('admin.academy.students')->with('success', 'Student deleted successfully.');
    }

    // ACADEMY ENROLLMENTS
    public function academyStoreEnrollment(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'academy_course_id' => 'required|exists:academy_courses,id',
            'status' => 'required|in:active,completed,dropped,suspended',
        ]);

        // Check if already enrolled
        $existing = \App\Models\Enrollment::where('user_id', $validated['user_id'])
            ->where('academy_course_id', $validated['academy_course_id'])
            ->first();

        if ($existing) {
            return back()->with('error', 'Student is already enrolled in this course.');
        }

        \App\Models\Enrollment::create([
            'user_id' => $validated['user_id'],
            'academy_course_id' => $validated['academy_course_id'],
            'status' => $validated['status'],
            'enrolled_at' => now(),
        ]);

        return redirect()->route('admin.academy.enrollments')->with('success', 'Enrollment created successfully.');
    }
    
    public function academyUpdateEnrollment(Request $request, $id)
    {
        $enrollment = \App\Models\Enrollment::findOrFail($id);
        
        $validated = $request->validate([
            'status' => 'required|in:active,completed,dropped,suspended',
            'progress' => 'nullable|integer|min:0|max:100',
            'completed_at' => 'nullable|date',
        ]);

        $enrollment->update($validated);

        return redirect()->route('admin.academy.enrollments')->with('success', 'Enrollment updated successfully.');
    }
    
    public function academyDestroyEnrollment($id)
    {
        $enrollment = \App\Models\Enrollment::findOrFail($id);
        $enrollment->delete();
        
        return redirect()->route('admin.academy.enrollments')->with('success', 'Enrollment deleted successfully.');
    }

    // ACADEMY CERTIFICATES
    public function academyStoreCertificate(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'academy_course_id' => 'required|exists:academy_courses,id',
            'certificate_number' => 'required|string|max:255|unique:certificates',
            'issued_at' => 'required|date',
            'status' => 'required|in:issued,revoked,expired',
        ]);

        \App\Models\Certificate::create($validated);

        return redirect()->route('admin.academy.certificates')->with('success', 'Certificate issued successfully.');
    }
    
    public function academyDownloadCertificate($id)
    {
        $certificate = \App\Models\Certificate::with(['user', 'academyCourse'])->findOrFail($id);
        
        // Generate PDF certificate (simplified logic)
        return response()->download(storage_path("certificates/{$certificate->certificate_number}.pdf"));
    }
    
    public function academyDestroyCertificate($id)
    {
        $certificate = \App\Models\Certificate::findOrFail($id);
        $certificate->delete();
        
        return redirect()->route('admin.academy.certificates')->with('success', 'Certificate deleted successfully.');
    }

    // ACADEMY SETTINGS
    public function academySettings() 
    { 
        $settings = [
            'academy_name' => Setting::get('academy_name', 'Namtech Academy'),
            'academy_email' => Setting::get('academy_email', 'academy@namtech-hub.com'),
            'academy_phone' => Setting::get('academy_phone', '+255 712 345 678'),
            'academy_address' => Setting::get('academy_address', 'Dar es Salaam, Tanzania'),
            'default_course_price' => Setting::get('academy_default_course_price', 99),
            'certificate_template' => Setting::get('academy_certificate_template', 'default'),
            'auto_certificate' => Setting::get('academy_auto_certificate', false),
            'enrollment_approval' => Setting::get('academy_enrollment_approval', false),
        ];
        return view('admin.academy.settings', compact('settings')); 
    }
    
    public function academyStoreSettings(Request $request)
    {
        $validated = $request->validate([
            'academy_name' => 'required|string|max:255',
            'academy_email' => 'required|email',
            'academy_phone' => 'required|string|max:20',
            'academy_address' => 'required|string',
            'default_course_price' => 'required|numeric|min:0',
            'certificate_template' => 'required|string|max:255',
            'auto_certificate' => 'nullable|boolean',
            'enrollment_approval' => 'nullable|boolean',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.academy.settings')->with('success', 'Academy settings updated successfully.');
    }

    // FINANCE
    public function financeInvoices() 
    { 
        $invoices = \App\Models\Invoice::with(['user', 'items'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Invoice::count(),
            'paid' => \App\Models\Invoice::where('status', 'paid')->sum('total_amount'),
            'pending' => \App\Models\Invoice::where('status', 'pending')->sum('total_amount'),
            'overdue' => \App\Models\Invoice::where('status', 'overdue')->count(),
        ];
        return view('admin.finance.invoices', compact('invoices', 'stats')); 
    }
    
    public function financePayments() 
    { 
        $payments = \App\Models\Payment::with(['user', 'invoice'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Payment::sum('amount'),
            'today' => \App\Models\Payment::whereDate('created_at', today())->sum('amount'),
            'this_month' => \App\Models\Payment::whereMonth('created_at', now()->month)->sum('amount'),
        ];
        return view('admin.finance.payments', compact('payments', 'stats')); 
    }
    
    public function financeRevenue() 
    { 
        $monthlyRevenue = \App\Models\Payment::selectRaw('SUM(amount) as total, strftime("%Y-%m", created_at) as month')
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->limit(12)
            ->get();
        return view('admin.finance.revenue', compact('monthlyRevenue')); 
    }
    
    // FINANCE INVOICES
    public function financeAddInvoice() 
    { 
        $users = User::where('status', 'active')->get();
        return view('admin.finance.add-invoice', compact('users')); 
    }
    
    public function financeStoreInvoice(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'invoice_number' => 'required|string|max:255|unique:invoices',
            'due_date' => 'required|date',
            'items' => 'required|array',
            'items.*.description' => 'required|string|max:255',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.unit_price' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        $totalAmount = 0;
        foreach ($validated['items'] as $item) {
            $totalAmount += $item['quantity'] * $item['unit_price'];
        }

        $invoice = \App\Models\Invoice::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'user_id' => $validated['user_id'],
            'invoice_number' => $validated['invoice_number'],
            'total_amount' => $totalAmount,
            'due_date' => $validated['due_date'],
            'status' => 'pending',
            'notes' => $validated['notes'] ?? null,
        ]);

        // Create invoice items
        foreach ($validated['items'] as $item) {
            $invoice->items()->create([
                'description' => $item['description'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['unit_price'],
                'total' => $item['quantity'] * $item['unit_price'],
            ]);
        }

        return redirect()->route('finance.invoices')->with('success', 'Invoice created successfully.');
    }
    
    public function financeEditInvoice($id)
    {
        $invoice = \App\Models\Invoice::with(['user', 'items'])->findOrFail($id);
        $users = User::where('status', 'active')->get();
        return view('admin.finance.edit-invoice', compact('invoice', 'users'));
    }
    
    public function financeUpdateInvoice(Request $request, $id)
    {
        $invoice = \App\Models\Invoice::findOrFail($id);
        
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,paid,overdue,cancelled',
            'notes' => 'nullable|string',
        ]);

        $invoice->update($validated);

        return redirect()->route('finance.invoices')->with('success', 'Invoice updated successfully.');
    }
    
    public function financeDestroyInvoice($id)
    {
        $invoice = \App\Models\Invoice::findOrFail($id);
        $invoice->delete();
        
        return redirect()->route('finance.invoices')->with('success', 'Invoice deleted successfully.');
    }
    
    public function financeSendInvoice($id)
    {
        $invoice = \App\Models\Invoice::with('user')->findOrFail($id);
        
        // Send invoice email logic here
        // Mail::to($invoice->user->email)->send(new InvoiceMail($invoice));
        
        $invoice->update(['sent_at' => now()]);
        
        return back()->with('success', 'Invoice sent successfully.');
    }
    
    public function financeMarkInvoicePaid($id)
    {
        $invoice = \App\Models\Invoice::findOrFail($id);
        $invoice->update([
            'status' => 'paid',
            'paid_at' => now(),
        ]);
        
        return back()->with('success', 'Invoice marked as paid.');
    }

    // FINANCE PAYMENTS
    public function financeStorePayment(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'invoice_id' => 'nullable|exists:invoices,id',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|string|max:255',
            'transaction_id' => 'nullable|string|max:255',
            'status' => 'required|in:pending,completed,failed,refunded',
            'notes' => 'nullable|string',
        ]);

        $payment = \App\Models\Payment::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'user_id' => $validated['user_id'],
            'invoice_id' => $validated['invoice_id'] ?? null,
            'amount' => $validated['amount'],
            'payment_method' => $validated['payment_method'],
            'transaction_id' => $validated['transaction_id'] ?? null,
            'status' => $validated['status'],
            'notes' => $validated['notes'] ?? null,
        ]);

        // Update invoice status if applicable
        if ($payment->invoice_id && $payment->status === 'completed') {
            $invoice = $payment->invoice;
            $totalPaid = $invoice->payments()->where('status', 'completed')->sum('amount');
            if ($totalPaid >= $invoice->total_amount) {
                $invoice->update(['status' => 'paid', 'paid_at' => now()]);
            }
        }

        return redirect()->route('finance.payments')->with('success', 'Payment recorded successfully.');
    }
    
    public function financeEditPayment($id)
    {
        $payment = \App\Models\Payment::with(['user', 'invoice'])->findOrFail($id);
        return view('admin.finance.edit-payment', compact('payment'));
    }
    
    public function financeUpdatePayment(Request $request, $id)
    {
        $payment = \App\Models\Payment::findOrFail($id);
        
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|string|max:255',
            'transaction_id' => 'nullable|string|max:255',
            'status' => 'required|in:pending,completed,failed,refunded',
            'notes' => 'nullable|string',
        ]);

        $payment->update($validated);

        return redirect()->route('finance.payments')->with('success', 'Payment updated successfully.');
    }
    
    public function financeDestroyPayment($id)
    {
        $payment = \App\Models\Payment::findOrFail($id);
        $payment->delete();
        
        return redirect()->route('finance.payments')->with('success', 'Payment deleted successfully.');
    }
    
    public function financeRefundPayment($id)
    {
        $payment = \App\Models\Payment::findOrFail($id);
        
        if ($payment->status !== 'completed') {
            return back()->with('error', 'Only completed payments can be refunded.');
        }
        
        $payment->update([
            'status' => 'refunded',
            'refunded_at' => now(),
        ]);
        
        return back()->with('success', 'Payment refunded successfully.');
    }

    // FINANCE EXPENSES
    public function financeAddExpense() 
    { 
        return view('admin.finance.add-expense'); 
    }
    
    public function financeStoreExpense(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
            'receipt' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'notes' => 'nullable|string',
        ]);

        $expense = \App\Models\Expense::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'description' => $validated['description'],
            'amount' => $validated['amount'],
            'category' => $validated['category'],
            'date' => $validated['date'],
            'notes' => $validated['notes'] ?? null,
        ]);

        // Handle receipt upload if present
        if ($request->hasFile('receipt')) {
            $receiptPath = $request->file('receipt')->store('expenses/receipts', 'public');
            $expense->update(['receipt' => $receiptPath]);
        }

        return redirect()->route('finance.expenses')->with('success', 'Expense recorded successfully.');
    }
    
    public function financeEditExpense($id)
    {
        $expense = \App\Models\Expense::findOrFail($id);
        return view('admin.finance.edit-expense', compact('expense'));
    }
    
    public function financeUpdateExpense(Request $request, $id)
    {
        $expense = \App\Models\Expense::findOrFail($id);
        
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $expense->update($validated);

        return redirect()->route('finance.expenses')->with('success', 'Expense updated successfully.');
    }
    
    public function financeDestroyExpense($id)
    {
        $expense = \App\Models\Expense::findOrFail($id);
        $expense->delete();
        
        return redirect()->route('finance.expenses')->with('success', 'Expense deleted successfully.');
    }

    // FINANCE STRIPE
    public function financeStripe() 
    { 
        $stats = [
            'total_revenue' => \App\Models\Payment::where('payment_method', 'stripe')->sum('amount'),
            'connected' => true, // Check Stripe connection
            'webhooks' => 3, // Count webhooks
        ];
        return view('admin.finance.stripe', compact('stats')); 
    }
    
    public function financeStripeSync()
    {
        // Sync with Stripe API
        return back()->with('success', 'Stripe data synchronized successfully.');
    }
    
    public function financeStripeWebhooks()
    {
        $webhooks = [
            'payment_intent.succeeded' => ['url' => '/stripe/webhooks/payment-success', 'status' => 'active'],
            'invoice.payment_succeeded' => ['url' => '/stripe/webhooks/invoice-paid', 'status' => 'active'],
            'customer.subscription.deleted' => ['url' => '/stripe/webhooks/subscription-cancelled', 'status' => 'inactive'],
        ];
        return view('admin.finance.stripe-webhooks', compact('webhooks'));
    }

    // FINANCE SETTINGS
    public function financeSettings() 
    { 
        $settings = [
            'currency' => Setting::get('finance_currency', 'USD'),
            'tax_rate' => Setting::get('finance_tax_rate', 0),
            'invoice_prefix' => Setting::get('finance_invoice_prefix', 'INV-'),
            'auto_send_invoices' => Setting::get('finance_auto_send_invoices', false),
            'stripe_enabled' => Setting::get('finance_stripe_enabled', false),
            'stripe_publishable_key' => Setting::get('finance_stripe_publishable_key', ''),
            'payment_reminders' => Setting::get('finance_payment_reminders', true),
            'overdue_days' => Setting::get('finance_overdue_days', 30),
        ];
        return view('admin.finance.settings', compact('settings')); 
    }
    
    public function financeStoreSettings(Request $request)
    {
        $validated = $request->validate([
            'currency' => 'required|string|max:3',
            'tax_rate' => 'required|numeric|min:0|max:100',
            'invoice_prefix' => 'required|string|max:10',
            'auto_send_invoices' => 'nullable|boolean',
            'stripe_enabled' => 'nullable|boolean',
            'stripe_publishable_key' => 'nullable|string|max:255',
            'stripe_secret_key' => 'nullable|string|max:255',
            'payment_reminders' => 'nullable|boolean',
            'overdue_days' => 'required|integer|min:1|max:365',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('finance.settings')->with('success', 'Finance settings updated successfully.');
    }

    // PARTNERSHIPS
    public function partners() { return view('admin.partnerships.partners'); }
    public function sponsors() { return view('admin.partnerships.sponsors'); }
    public function investors() { return view('admin.partnerships.investors'); }
    public function mentors() { return view('admin.partnerships.mentors'); }

    // EVENTS
    public function events() 
    { 
        $events = \App\Models\Event::withCount('registrations')->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Event::count(),
            'upcoming' => \App\Models\Event::where('start_date', '>=', now())->count(),
            'past' => \App\Models\Event::where('end_date', '<', now())->count(),
        ];
        return view('admin.events.index', compact('events', 'stats')); 
    }
    
    public function createEvent() { return view('admin.events.create'); }
    
    public function eventRegistrations() 
    { 
        $registrations = \App\Models\EventRegistration::with(['user', 'event'])->latest()->paginate(10);
        return view('admin.events.registrations', compact('registrations')); 
    }
    
    public function eventCalendar() { return view('admin.events.calendar'); }

    // RESOURCES
    public function resources() 
    { 
        $resources = \App\Models\Resource::with(['uploader'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Resource::count(),
            'downloads' => \App\Models\Resource::sum('download_count'),
        ];
        return view('admin.resources.index', compact('resources', 'stats')); 
    }
    
    public function addResource() { return view('admin.resources.create'); }
    public function toolkit() { return view('admin.resources.toolkit'); }
    public function tickets() 
    { 
        $tickets = \App\Models\SupportTicket::with(['user', 'assignedTo'])->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\SupportTicket::count(),
            'open' => \App\Models\SupportTicket::where('status', 'open')->count(),
            'in_progress' => \App\Models\SupportTicket::where('status', 'in_progress')->count(),
            'resolved' => \App\Models\SupportTicket::where('status', 'resolved')->count(),
        ];
        return view('admin.support.index', compact('tickets', 'stats')); 
    }
    
    public function openTickets() 
    { 
        $tickets = \App\Models\SupportTicket::with(['user'])->where('status', 'open')->latest()->paginate(10);
        return view('admin.support.open', compact('tickets')); 
    }
    
    public function resolvedTickets() 
    { 
        $tickets = \App\Models\SupportTicket::with(['user'])->where('status', 'resolved')->latest()->paginate(10);
        return view('admin.support.resolved', compact('tickets')); 
    }
    
    public function supportSettings() { return view('admin.support.settings'); }

    // REPORTS
    public function dailyReport() { return view('admin.reports.daily'); }
    public function monthlyReport() { return view('admin.reports.monthly'); }
    public function annualReport() { return view('admin.reports.annual'); }
    public function userGrowth() { return view('admin.reports.user-growth'); }
    public function revenueReport() { return view('admin.reports.revenue'); }
    public function exportData() { return view('admin.reports.export'); }

    // SYSTEM
    public function systemSettings()
    {
        $settings = Setting::whereIn('group', ['general', 'branding'])->pluck('value', 'key');
        return view('admin.system.settings', compact('settings'));
    }

    public function storeSystemSettings(Request $request)
    {
        $validated = $request->validate([
            'app_name' => 'nullable|string|max:255',
            'app_url' => 'nullable|url|max:255',
            'timezone' => 'nullable|string|max:50',
            'date_format' => 'nullable|string|max:20',
            'maintenance_mode' => 'nullable|boolean',
            'enable_registration' => 'nullable|boolean',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value, 'general', is_bool($value) ? 'boolean' : 'string');
        }

        return redirect()->route('admin.system.settings')->with('success', 'General settings updated successfully.');
    }

    public function emailSettings()
    {
        $settings = Setting::where('group', 'email')->pluck('value', 'key');
        return view('admin.system.emails', compact('settings'));
    }

    public function storeEmailSettings(Request $request)
    {
        $validated = $request->validate([
            'mail_driver' => 'required|in:smtp,sendmail,mailgun,postmark,ses,log,array',
            'mail_host' => 'nullable|string|max:255',
            'mail_port' => 'nullable|integer',
            'mail_username' => 'nullable|string|max:255',
            'mail_password' => 'nullable|string|max:255',
            'mail_encryption' => 'nullable|in:tls,ssl,null',
            'mail_from_address' => 'required|email|max:255',
            'mail_from_name' => 'required|string|max:255',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value, 'email');
        }

        return redirect()->route('admin.system.emails')->with('success', 'Email settings updated successfully.');
    }

    public function paymentSettings()
    {
        $settings = Setting::where('group', 'payment')->pluck('value', 'key');
        return view('admin.system.payments', compact('settings'));
    }

    public function storePaymentSettings(Request $request)
    {
        $validated = $request->validate([
            'currency' => 'required|string|size:3',
            'currency_symbol' => 'required|string|max:10',
            'stripe_enabled' => 'nullable|boolean',
            'stripe_key' => 'nullable|string|max:255',
            'stripe_secret' => 'nullable|string|max:255',
            'paypal_enabled' => 'nullable|boolean',
            'paypal_client_id' => 'nullable|string|max:255',
            'paypal_secret' => 'nullable|string|max:255',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value, 'payment', is_bool($value) ? 'boolean' : 'string');
        }

        return redirect()->route('admin.system.payments')->with('success', 'Payment settings updated successfully.');
    }

    public function apiKeys()
    {
        $keys = ApiKey::with('creator')->latest()->paginate(10);
        return view('admin.system.api-keys', compact('keys'));
    }

    public function storeApiKey(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:50',
            'expires_at' => 'nullable|date',
        ]);

        ApiKey::create([
            'name' => $validated['name'],
            'service' => $validated['service'],
            'expires_at' => $validated['expires_at'] ?? null,
            'created_by' => auth()->id(),
        ]);

        return redirect()->route('admin.system.api-keys')->with('success', 'API key created successfully.');
    }

    public function revokeApiKey(string $id)
    {
        $key = ApiKey::findOrFail($id);
        $key->update(['is_active' => false]);

        return redirect()->route('admin.system.api-keys')->with('success', 'API key revoked successfully.');
    }

    public function auditLogs()
    {
        $logs = AuditLog::with('user')->latest()->paginate(20);
        return view('admin.system.audit-logs', compact('logs'));
    }

    public function backup()
    {
        $backups = [];
        $backupPath = storage_path('app/backups');

        if (is_dir($backupPath)) {
            $files = glob($backupPath . '/*.zip');
            foreach ($files as $file) {
                $backups[] = [
                    'name' => basename($file),
                    'size' => round(filesize($file) / 1024 / 1024, 2) . ' MB',
                    'created_at' => date('Y-m-d H:i:s', filemtime($file)),
                ];
            }
        }

        usort($backups, fn($a, $b) => strcmp($b['created_at'], $a['created_at']));

        return view('admin.system.backup', compact('backups'));
    }

    public function createBackup()
    {
        $backupPath = storage_path('app/backups');
        if (!is_dir($backupPath)) {
            mkdir($backupPath, 0755, true);
        }

        $filename = 'backup_' . now()->format('Y-m-d_H-i-s') . '.zip';
        $filepath = $backupPath . '/' . $filename;

        // Simple database backup (SQL dump)
        $dbPath = storage_path('app/backups/db_' . now()->format('Y-m-d_H-i-s') . '.sql');
        $command = sprintf(
            'mysqldump -u%s -p%s %s > %s',
            escapeshellarg(config('database.connections.mysql.username')),
            escapeshellarg(config('database.connections.mysql.password')),
            escapeshellarg(config('database.connections.mysql.database')),
            escapeshellarg($dbPath)
        );
        @exec($command);

        // Create ZIP
        $zip = new \ZipArchive();
        if ($zip->open($filepath, \ZipArchive::CREATE) === true) {
            if (file_exists($dbPath)) {
                $zip->addFile($dbPath, basename($dbPath));
            }
            $zip->close();
            @unlink($dbPath);
        }

        AuditLog::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'user_id' => auth()->id(),
            'action' => 'backup_created',
            'description' => 'System backup created: ' . $filename,
            'ip_address' => request()->ip(),
        ]);

        return redirect()->route('admin.system.backup')->with('success', 'Backup created successfully.');
    }

    public function systemStatus()
    {
        return view('admin.system.status');
    }
}
