<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function latest()
    {
        return view('blog.index', ['category' => 'Latest Posts', 'title' => 'Latest from NAMTECH-HUB']);
    }

    public function stories()
    {
        return view('blog.index', ['category' => 'Startup Stories', 'title' => 'Inspiring Startup Stories']);
    }

    public function tutorials()
    {
        return view('blog.index', ['category' => 'Tech Tutorials', 'title' => 'Step-by-Step Tech Tutorials']);
    }

    public function insights()
    {
        return view('blog.index', ['category' => 'Industry Insights', 'title' => 'Deep Dives & Industry Insights']);
    }

    public function announcements()
    {
        return view('blog.index', ['category' => 'Hub Announcements', 'title' => 'Official NAMTECH-HUB Announcements']);
    }
}
