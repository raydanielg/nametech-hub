<?php

namespace App\Http\Controllers\HubDirector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HubDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:hub_director']);
    }

    public function index() { return view('hub.dashboard.main'); }
}
