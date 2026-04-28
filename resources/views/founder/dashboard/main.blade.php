@extends('layouts.dashboard')

@section('dashboard-title', 'Startup Founder Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Founder Header -->
    <div class="bg-gradient-to-r from-pink-600 to-pink-500 p-10 rounded-[2.5rem] text-white shadow-xl shadow-pink-100 flex flex-col md:flex-row items-center justify-between">
        <div class="space-y-4">
            <h2 class="text-3xl font-black">Growth Tracker: <span class="opacity-80">TechNova</span></h2>
            <div class="flex items-center space-x-4">
            </div>
            <div class="mt-6 w-full bg-gray-50 rounded-full h-2">
                <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Sessions</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['upcoming_sessions'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-blue-500 mb-1">Upcoming</span>
            </div>
            <div class="mt-6 w-full bg-gray-50 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 100%"></div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Launchpad Progress</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['startup_progress'] ?? 0 }}%</h3>
                <span class="text-xs font-bold text-pink-600 mb-1">Overall</span>
            </div>
            <div class="mt-6 w-full bg-gray-50 rounded-full h-2">
                <div class="bg-pink-600 h-2 rounded-full" style="width: {{ $stats['startup_progress'] ?? 0 }}%"></div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Next Milestones -->
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-black text-gray-900">Next Milestones</h3>
                <a href="{{ route('founder.milestones') }}" class="text-xs font-black text-pink-600 uppercase tracking-widest hover:underline">View All</a>
            </div>
            <div class="space-y-4">
                @foreach(['MVP Launch', 'First 100 Users', 'Seed Round Pitch'] as $milestone)
                <div class="flex items-center p-4 bg-gray-50/50 rounded-2xl border border-gray-50 hover:bg-gray-50 transition">
                    <div class="w-10 h-10 rounded-xl bg-white border border-gray-100 flex items-center justify-center mr-4">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-800">{{ $milestone }}</p>
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-0.5">Due in 2 weeks</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Mentorship Sessions -->
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-black text-gray-900">Mentorship Sessions</h3>
                <a href="{{ route('founder.sessions') }}" class="text-xs font-black text-blue-600 uppercase tracking-widest hover:underline">Book New</a>
            </div>
            <div class="space-y-4">
                <div class="flex items-center p-5 bg-blue-50/30 rounded-[2rem] border border-blue-50/50">
                    <div class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center mr-4 shadow-sm">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-black text-blue-900">Strategy Review</p>
                        <p class="text-xs font-bold text-blue-600/70">Tomorrow at 10:00 AM</p>
                    </div>
                </div>
                <div class="flex items-center p-5 bg-gray-50 rounded-[2rem] border border-gray-100 opacity-60">
                    <div class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-800">Pitch Deck Prep</p>
                        <p class="text-xs text-gray-400">Completed 3 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
