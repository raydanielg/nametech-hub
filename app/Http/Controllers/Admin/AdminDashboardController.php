<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:super_admin']);
    }

    // DASHBOARD
    public function index() 
    { 
        $stats = [
            'total_users' => User::count(),
            'active_startups' => \App\Models\Startup::where('status', 'active')->count(),
            'total_revenue' => \App\Models\Payment::sum('amount'),
            'pending_tickets' => \App\Models\SupportTicket::where('status', 'open')->count(),
        ];
        return view('admin.dashboard.main', compact('stats')); 
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
    public function memberships() { return view('admin.hub.memberships'); }
    public function members() { return view('admin.hub.members'); }
    public function coworking() { return view('admin.hub.coworking'); }
    public function meetingRooms() { return view('admin.hub.meeting-rooms'); }
    public function hubSettings() { return view('admin.hub.settings'); }

    // PROGRAMS
    public function launchpad() { return view('admin.programs.launchpad'); }
    public function scale() { return view('admin.programs.scale'); }
    public function applications() { return view('admin.programs.applications'); }
    public function cohorts() { return view('admin.programs.cohorts'); }
    public function milestones() { return view('admin.programs.milestones'); }
    public function demoDay() { return view('admin.programs.demo-day'); }

    // STUDIO
    public function studioProjects() { return view('admin.studio.projects'); }
    public function studioClients() { return view('admin.studio.clients'); }
    public function studioDevelopers() { return view('admin.studio.developers'); }
    public function studioRepos() { return view('admin.studio.repos'); }
    public function studioSettings() { return view('admin.studio.settings'); }

    // ACADEMY
    public function academyCourses() { return view('admin.academy.courses'); }
    public function academyAddCourse() { return view('admin.academy.create-course'); }
    public function academyStudents() { return view('admin.academy.students'); }
    public function academyEnrollments() { return view('admin.academy.enrollments'); }
    public function academyCertificates() { return view('admin.academy.certificates'); }
    public function academySettings() { return view('admin.academy.settings'); }

    // FINANCE
    public function financeInvoices() { return view('admin.finance.invoices'); }
    public function financePayments() { return view('admin.finance.payments'); }
    public function financeRevenue() { return view('admin.finance.revenue'); }
    public function financeExpenses() { return view('admin.finance.expenses'); }
    public function financeStripe() { return view('admin.finance.stripe'); }
    public function financeSettings() { return view('admin.finance.settings'); }

    // PARTNERSHIPS
    public function partners() { return view('admin.partnerships.partners'); }
    public function sponsors() { return view('admin.partnerships.sponsors'); }
    public function investors() { return view('admin.partnerships.investors'); }
    public function mentors() { return view('admin.partnerships.mentors'); }

    // EVENTS
    public function events() { return view('admin.events.index'); }
    public function createEvent() { return view('admin.events.create'); }
    public function eventRegistrations() { return view('admin.events.registrations'); }
    public function eventCalendar() { return view('admin.events.calendar'); }

    // RESOURCES
    public function resources() { return view('admin.resources.index'); }
    public function addResource() { return view('admin.resources.create'); }
    public function toolkit() { return view('admin.resources.toolkit'); }
    public function downloads() { return view('admin.resources.downloads'); }

    // SUPPORT
    public function tickets() { return view('admin.support.index'); }
    public function openTickets() { return view('admin.support.open'); }
    public function resolvedTickets() { return view('admin.support.resolved'); }
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
