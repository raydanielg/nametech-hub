<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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

    public function show(Blog $blog)
    {
        // Increment views count
        $blog->increment('views_count');

        // Get related posts
        $relatedPosts = $blog->relatedPosts(4);

        // Get popular posts
        $popularPosts = Blog::published()
            ->where('id', '!=', $blog->id)
            ->orderBy('views_count', 'desc')
            ->limit(3)
            ->get();

        return view('blog.show', compact('blog', 'relatedPosts', 'popularPosts'));
    }
}
