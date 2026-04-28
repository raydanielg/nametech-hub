<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Startup;
use App\Models\StudioProject;
use App\Models\Invoice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'total_startups' => Startup::count(),
            'active_projects' => StudioProject::where('status', 'active')->count(),
            'total_revenue' => Invoice::where('status', 'paid')->sum('total_amount'),
        ];

        return response()->json([
            'status' => 'success',
            'data' => $stats
        ]);
    }

    public function recentActivity()
    {
        // For now, returning basic recent records
        return response()->json([
            'status' => 'success',
            'data' => [
                'recent_users' => User::latest()->take(5)->get(),
                'recent_startups' => Startup::latest()->take(5)->get(),
            ]
        ]);
    }
}

