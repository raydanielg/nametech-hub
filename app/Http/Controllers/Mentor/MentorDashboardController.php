<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MentorshipSession;
use Illuminate\Support\Facades\Auth;

class MentorDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:mentor']);
    }

    public function index()
    {
        $user = Auth::user();
        $stats = [
            'upcoming_sessions' => MentorshipSession::where('mentor_id', $user->id)->where('start_time', '>', now())->count(),
            'total_mentees' => User::where('mentor_id', $user->id)->count(),
            'hours_mentored' => MentorshipSession::where('mentor_id', $user->id)->where('status', 'completed')->sum('duration') ?? 0,
        ];

        return view('mentor.dashboard.main', compact('stats'));
    }

    public function mentees()
    {
        $mentees = User::where('mentor_id', Auth::id())->latest()->paginate(10);
        return view('mentor.mentees.index', compact('mentees'));
    }

    public function sessions()
    {
        $sessions = MentorshipSession::where('mentor_id', Auth::id())->with('mentee')->latest()->paginate(10);
        return view('mentor.sessions.index', compact('sessions'));
    }

    public function resources()
    {
        return view('mentor.resources.index');
    }
}
