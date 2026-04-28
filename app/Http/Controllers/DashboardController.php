<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $role = $user->roles->first()->name ?? 'guest';

        return view('dashboard.index', compact('user', 'role'));
    }
}
