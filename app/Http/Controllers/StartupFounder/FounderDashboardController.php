<?php

namespace App\Http\Controllers\StartupFounder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FounderDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:startup_founder']);
    }

    public function index() { return view('founder.dashboard.main'); }
}
