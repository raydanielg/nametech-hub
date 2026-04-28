@extends('layouts.dashboard')

@section('dashboard-title', 'Startup Founder Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Founder Header -->
    <div class="bg-gradient-to-r from-pink-600 to-pink-500 p-10 rounded-[2.5rem] text-white shadow-xl shadow-pink-100 flex flex-col md:flex-row items-center justify-between">
        <div class="space-y-4">
            <h2 class="text-3xl font-black">Growth Tracker: <span class="opacity-80">TechNova</span></h2>
            <div class="flex items-center space-x-4">
                <span class="px-4 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-xs font-black uppercase">Launchpad Cohort 4</span>
                <span class="text-white/60">|</span>
                <span class="text-sm font-medium">Mentor: Alex Kyalo</span>
            </div>
        </div>
        <div class="mt-8 md:mt-0">
            <button class="bg-white text-pink-600 px-8 py-3 rounded-2xl font-black text-sm shadow-lg hover:bg-pink-50 transition transform hover:-translate-y-1">Submit Milestone</button>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Next Milestones -->
        <div class="lg:col-span-2 bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-gray-900">Next Milestones</h3>
                <span class="text-xs font-bold text-gray-400 uppercase">Quarter 2</span>
            </div>
            <div class="space-y-6">
                <div class="flex items-start space-x-6 p-6 bg-gray-50/50 rounded-3xl border border-gray-100/50">
                    <div class="w-12 h-12 bg-pink-100 rounded-2xl flex items-center justify-center shrink-0">
                        <span class="text-pink-600 font-black">01</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between">
                            <h4 class="font-bold text-gray-800">MVP Prototype V1</h4>
                            <span class="text-[10px] font-black text-pink-500 bg-pink-50 px-2 py-1 rounded">DUE IN 4 DAYS</span>
                        </div>
                        <p class="text-sm text-gray-400 mt-1">Complete initial UI/UX for core features.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-6 p-6 bg-white rounded-3xl border border-gray-100">
                    <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center shrink-0">
                        <span class="text-gray-400 font-black">02</span>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-800">Market Validation Survey</h4>
                        <p class="text-sm text-gray-400 mt-1">Collect feedback from at least 100 potential users.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mentorship -->
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-8">Upcoming Session</h3>
            <div class="text-center p-6 bg-gray-50 rounded-3xl border border-gray-100/50">
                <div class="w-20 h-20 bg-pink-100 rounded-full mx-auto mb-4 flex items-center justify-center text-pink-600 font-black text-xl border-4 border-white shadow-sm">
                    A
                </div>
                <h4 class="font-bold text-gray-900">Alex Kyalo</h4>
                <p class="text-xs text-gray-400 mb-6">Product Strategy Session</p>
                <div class="flex flex-col space-y-2">
                    <div class="flex items-center justify-center space-x-2 text-xs font-bold text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>Tomorrow, 10:00 AM</span>
                    </div>
                </div>
                <button class="w-full mt-6 py-3 rounded-2xl text-xs font-black text-white bg-gray-900 hover:bg-gray-800 transition">Join Zoom</button>
            </div>
        </div>
    </div>
</div>
@endsection
