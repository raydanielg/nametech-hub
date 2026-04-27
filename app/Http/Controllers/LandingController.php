<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Partner;
use App\Models\Announcement;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $programs = Program::where('is_active', true)->get();
        $partners = Partner::where('is_active', true)->orderBy('order')->get();
        $announcement = Announcement::where('is_active', true)->latest()->first();
        $testimonials = Testimonial::where('is_active', true)->get();
        
        return view('landing.index', compact('programs', 'partners', 'announcement', 'testimonials'));
    }
}
