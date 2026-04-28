<?php

namespace App\Http\Controllers\HubDirector;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HubDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:hub_director']);
    }

    // Dashboard Overview
    public function index() 
    { 
        $stats = [
            'total_members' => User::whereHas('roles', fn($q) => $q->whereIn('name', ['startup_founder', 'mentor', 'student']))->count(),
            'upcoming_events' => \App\Models\Event::where('start_date', '>=', now())->count(),
            'active_startups' => \App\Models\Startup::where('status', 'active')->count(),
        ];
        return view('hub.dashboard.main', compact('stats')); 
    }

    // Community - Members
    public function members() 
    { 
        $members = User::whereHas('roles', function($q) {
            $q->whereIn('name', ['startup_founder', 'mentor', 'student', 'hub_member']);
        })->with('roles')->latest()->paginate(10);
        return view('hub.members.index', compact('members')); 
    }

    // Community - Events
    public function events() 
    { 
        $events = \App\Models\Event::withCount('registrations')->latest()->paginate(10);
        return view('hub.events.index', compact('events')); 
    }

    // Ecosystem - Launchpad
    public function launchpad() 
    { 
        $startups = \App\Models\Startup::where('program_type', 'launchpad')->with('founder')->latest()->paginate(10);
        return view('hub.launchpad.index', compact('startups')); 
    }

    // Ecosystem - Mentors
    public function mentors() 
    { 
        $mentors = User::whereHas('roles', function($q) {
            $q->where('name', 'mentor');
        })->withCount(['mentorshipSessions', 'mentees'])->latest()->paginate(10);
        return view('hub.mentors.index', compact('mentors')); 
    }
}
