<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademyCourse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:student']);
    }

    public function index()
    {
        $stats = [
            'enrolled_courses' => 0,
            'completed_courses' => 0,
            'upcoming_events' => \App\Models\Event::where('start_date', '>', now())->count(),
        ];

        return view('student.dashboard.main', compact('stats'));
    }

    public function courses()
    {
        $courses = AcademyCourse::where('status', 'active')->latest()->paginate(10);
        return view('student.courses.index', compact('courses'));
    }

    public function events()
    {
        $events = \App\Models\Event::where('start_date', '>', now())->latest()->paginate(10);
        return view('student.events.index', compact('events'));
    }
}
