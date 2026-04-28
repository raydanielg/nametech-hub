@extends('layouts.dashboard')

@section('dashboard-title', 'Student Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Student Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Enrolled Courses</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['enrolled_courses'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-pink-600 mb-1">Active</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Completed</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['completed_courses'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-green-500 mb-1">Courses</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Upcoming Events</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['upcoming_events'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-blue-500 mb-1">This Month</span>
            </div>
        </div>
    </div>

    <!-- Learning Progress Preview -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Continue Learning</h3>
            <div class="space-y-4">
                <p class="text-gray-400 text-sm italic">You are not currently enrolled in any courses.</p>
                <a href="{{ route('student.courses') }}" class="text-pink-600 font-bold text-xs uppercase tracking-widest hover:underline">Browse Academy</a>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Community Events</h3>
            <div class="space-y-4">
                <p class="text-gray-400 text-sm italic">No events joined yet.</p>
                <a href="{{ route('student.events') }}" class="text-blue-600 font-bold text-xs uppercase tracking-widest hover:underline">Explore Events</a>
            </div>
        </div>
    </div>
</div>
@endsection
