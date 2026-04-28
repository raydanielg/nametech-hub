<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Startup;
use App\Models\Payment;
use App\Models\SupportTicket;
use App\Models\Enrollment;
use App\Models\AcademyCourse;

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
        $checks = [
            'database' => true,
        ];

        try {
            User::query()->limit(1)->count();
        } catch (\Throwable $e) {
            $checks['database'] = false;
        }

        return response()->json([
            'status' => $checks['database'] ? 'ok' : 'degraded',
            'checks' => $checks,
            'generated_at' => now()->toIso8601String(),
        ]);
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

    public function roles() 
    { 
        $roles = Role::withCount('users')->get();
        return view('admin.users.roles', compact('roles')); 
    }

    public function pendingUsers() 
    { 
        $users = User::where('status', 'pending_verification')->latest()->paginate(10);
        return view('admin.users.pending', compact('users')); 
    }

    public function deletedUsers() 
    { 
        $users = User::onlyTrashed()->latest()->paginate(10);
        return view('admin.users.deleted', compact('users')); 
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
    
    public function studioRepos() { return view('admin.studio.repos'); }
    public function studioSettings() { return view('admin.studio.settings'); }

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

    public function academySettings() { return view('admin.academy.settings'); }

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
    
    public function financeExpenses() { return view('admin.finance.expenses'); }
    public function financeStripe() { return view('admin.finance.stripe'); }
    public function financeSettings() { return view('admin.finance.settings'); }

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
    public function downloads() { return view('admin.resources.downloads'); }

    // SUPPORT
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
    public function systemSettings() { return view('admin.system.settings'); }
    public function emailSettings() { return view('admin.system.emails'); }
    public function paymentSettings() { return view('admin.system.payments'); }
    public function apiKeys() { return view('admin.system.api-keys'); }
    public function auditLogs() { return view('admin.system.audit-logs'); }
    public function backup() { return view('admin.system.backup'); }
    public function systemStatus() { return view('admin.system.status'); }
}
