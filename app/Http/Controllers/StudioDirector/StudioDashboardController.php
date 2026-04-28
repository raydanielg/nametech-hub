<?php

namespace App\Http\Controllers\StudioDirector;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudioDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:studio_director']);
    }

    // Dashboard Overview
    public function index() 
    { 
        $stats = [
            'active_projects' => \App\Models\StudioProject::where('status', 'active')->count(),
            'total_clients' => \App\Models\StudioClient::count(),
            'team_members' => User::whereHas('roles', fn($q) => $q->where('name', 'developer'))->count(),
            'overdue_tasks' => \App\Models\StudioTask::where('deadline', '<', now())->where('status', '!=', 'completed')->count(),
        ];
        return view('studio.dashboard.main', compact('stats')); 
    }

    // Production - Active Projects
    public function projects() 
    { 
        $projects = \App\Models\StudioProject::with(['client', 'developers'])->latest()->paginate(10);
        return view('studio.projects.index', compact('projects')); 
    }

    // Production - Team Workload
    public function teamWorkload() 
    { 
        $developers = User::whereHas('roles', function($q) {
            $q->where('name', 'developer');
        })->withCount(['studioProjects', 'studioTasks'])->latest()->paginate(10);
        return view('studio.team.index', compact('developers')); 
    }

    // Business - Client Portal
    public function clients() 
    { 
        $clients = \App\Models\StudioClient::withCount('projects')->latest()->paginate(10);
        return view('studio.clients.index', compact('clients')); 
    }

    // Business - Studio Invoices
    public function invoices() 
    { 
        $invoices = \App\Models\Invoice::where('type', 'studio')->with('user')->latest()->paginate(10);
        $stats = [
            'total' => \App\Models\Invoice::where('type', 'studio')->sum('total_amount'),
            'paid' => \App\Models\Invoice::where('type', 'studio')->where('status', 'paid')->sum('total_amount'),
            'pending' => \App\Models\Invoice::where('type', 'studio')->where('status', 'pending')->sum('total_amount'),
        ];
        return view('studio.invoices.index', compact('invoices', 'stats')); 
    }
}
