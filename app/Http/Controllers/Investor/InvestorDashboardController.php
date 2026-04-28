<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Startup;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InvestorDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'has.role:investor']);
    }

    public function index()
    {
        $stats = [
            'active_startups' => Startup::where('status', 'active')->count(),
            'recent_deals' => 0,
            'portfolio_count' => 0,
        ];

        return view('investor.dashboard.main', compact('stats'));
    }

    public function pipeline()
    {
        $startups = Startup::where('status', 'active')->latest()->paginate(10);
        return view('investor.pipeline.index', compact('startups'));
    }

    public function portfolio()
    {
        return view('investor.portfolio.index');
    }
}
