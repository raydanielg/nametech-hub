<?php

namespace App\Http\Controllers\StartupFounder;

use App\Http\Controllers\Controller;
use App\Models\Startup;
use App\Models\Milestone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FounderDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:startup_founder']);
    }

    // Dashboard Overview
    public function index() 
    { 
        $user = Auth::user();
        $startup = Startup::where('founder_id', $user->id)->first();
        
        $stats = [
            'milestones_completed' => $startup ? Milestone::where('startup_id', $startup->id)->where('status', 'completed')->count() : 0,
            'upcoming_sessions' => \App\Models\MentorshipSession::where('startup_id', $startup->id ?? null)->where('start_time', '>', now())->count(),
            'startup_progress' => $startup->progress ?? 0,
        ];
        
        return view('founder.dashboard.main', compact('startup', 'stats')); 
    }

    // Growth - My Startup
    public function myStartup() 
    { 
        $startup = Startup::where('founder_id', Auth::id())->with(['cohort', 'founder'])->first();
        return view('founder.startup.index', compact('startup')); 
    }

    // Growth - Milestones
    public function milestones() 
    { 
        $startup = Startup::where('founder_id', Auth::id())->first();
        $milestones = $startup ? Milestone::where('startup_id', $startup->id)->latest()->paginate(10) : collect([]);
        return view('founder.milestones.index', compact('milestones')); 
    }

    // Support - My Mentor
    public function myMentor() 
    { 
        $user = Auth::user();
        $mentor = $user->mentor; // Assuming a relationship exists
        return view('founder.mentorship.mentor', compact('mentor')); 
    }

    // Support - Sessions
    public function sessions() 
    { 
        $startup = Startup::where('founder_id', Auth::id())->first();
        $sessions = $startup ? \App\Models\MentorshipSession::where('startup_id', $startup->id)->with('mentor')->latest()->paginate(10) : collect([]);
        return view('founder.mentorship.sessions', compact('sessions')); 
    }

    // Network - Investors
    public function investors() 
    { 
        $investors = User::whereHas('roles', function($q) {
            $q->where('name', 'investor');
        })->latest()->paginate(12);
        return view('founder.investors.index', compact('investors')); 
    }
}
