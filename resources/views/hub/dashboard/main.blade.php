@extends('layouts.dashboard')

@section('dashboard-title', 'Hub Director Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Hub Overview Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-1">Total Hub Members</p>
                <h3 class="text-3xl font-black text-gray-900">{{ $stats['total_members'] }}</h3>
                <div class="mt-4 flex items-center text-green-500 text-xs font-bold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    Community Active
                </div>
            </div>
            <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-pink-50 rounded-full opacity-50"></div>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-1">Upcoming Events</p>
                <h3 class="text-3xl font-black text-gray-900">{{ $stats['upcoming_events'] }}</h3>
                <div class="mt-4 flex items-center text-blue-500 text-xs font-bold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Events This Month
                </div>
            </div>
            <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-blue-50 rounded-full opacity-50"></div>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-1">Active Startups</p>
                <h3 class="text-3xl font-black text-gray-900">{{ $stats['active_startups'] }}</h3>
                <div class="mt-4 flex items-center text-purple-500 text-xs font-bold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    In Programs
                </div>
            </div>
            <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-purple-50 rounded-full opacity-50"></div>
        </div>
    </div>

    <!-- Community & Programs -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Program Health</h3>
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between text-sm font-bold mb-2">
                        <span class="text-gray-600">Launchpad Cohort 4</span>
                        <span class="text-pink-600">65% Progress</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-pink-600 h-2 rounded-full" style="width: 65%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm font-bold mb-2">
                        <span class="text-gray-600">Scale Acceleration</span>
                        <span class="text-blue-600">82% Progress</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 82%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Recent Community Activity</h3>
            <div class="space-y-4">
                @foreach(['New member joined: TechNova', 'Mentor session completed by Alex', 'Event registration: Startup Night'] as $activity)
                <div class="flex items-center space-x-3 text-sm">
                    <div class="w-2 h-2 rounded-full bg-pink-500"></div>
                    <span class="text-gray-700 font-medium">{{ $activity }}</span>
                    <span class="text-gray-300 ml-auto">2h ago</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
