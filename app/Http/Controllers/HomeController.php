<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('super_admin')) {
            return redirect()->route('admin.dashboard.main');
        }

        if ($user->hasRole('hub_director')) {
            return redirect()->route('hub.dashboard.main');
        }

        if ($user->hasRole('studio_director')) {
            return redirect()->route('studio.dashboard.main');
        }

        if ($user->hasRole('startup_founder')) {
            return redirect()->route('founder.dashboard.main');
        }

        if ($user->hasRole('mentor')) {
            return redirect()->route('mentor.dashboard.main');
        }

        if ($user->hasRole('investor')) {
            return redirect()->route('investor.dashboard.main');
        }

        if ($user->hasRole('student')) {
            return redirect()->route('student.dashboard.main');
        }

        return redirect()->route('dashboard');
    }
}
