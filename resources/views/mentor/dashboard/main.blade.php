@extends('layouts.dashboard')

@section('dashboard-title', 'Mentor Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Mentor Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Upcoming Sessions</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['upcoming_sessions'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-pink-600 mb-1">Active</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Total Mentees</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['total_mentees'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-blue-500 mb-1">Assigned</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Mentorship Hours</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['hours_mentored'] ?? 0 }}h</h3>
                <span class="text-xs font-bold text-green-500 mb-1">Completed</span>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Recent Mentees</h3>
            <div class="space-y-4">
                <p class="text-gray-400 text-sm italic">No recent mentee activity.</p>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Upcoming Sessions</h3>
            <div class="space-y-4">
                <p class="text-gray-400 text-sm italic">No upcoming sessions scheduled.</p>
            </div>
        </div>
    </div>
</div>
@endsection
