@extends('layouts.dashboard')

@section('dashboard-title', 'Demo Day Manager')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Demo Day Manager</h2>
            <p class="text-sm text-gray-500 font-medium">Coordinate startup presentations and investor interactions for Demo Day events.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
            <span>Plan New Event</span>
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Upcoming Event -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-[#E9E9EB] p-8 rounded-[3rem] border border-transparent hover:border-white transition-all duration-300 shadow-sm relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-emerald-500/10 rounded-full blur-3xl"></div>
                
                <div class="flex items-center space-x-4 mb-8">
                    <div class="w-16 h-16 bg-white rounded-3xl flex flex-col items-center justify-center shadow-sm border border-emerald-50 text-emerald-600">
                        <span class="text-[10px] font-black uppercase tracking-widest leading-none">Jun</span>
                        <span class="text-2xl font-black leading-none mt-1">15</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-black">Summer Cohort Demo Day 2024</h3>
                        <p class="text-xs text-gray-500 font-medium italic">Main Auditorium • 09:00 AM - 17:00 PM</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Presenting Startups</h4>
                        <div class="space-y-3">
                            @for($i=1; $i<=4; $i++)
                            <div class="flex items-center space-x-3 p-3 bg-white/50 rounded-2xl border border-white/50 group hover:border-emerald-200 transition-colors">
                                <div class="w-8 h-8 bg-white rounded-xl flex items-center justify-center font-bold text-xs text-emerald-600 shadow-sm">S</div>
                                <span class="text-sm font-bold text-gray-700">Startup Alpha {{ $i }}</span>
                                <svg class="w-4 h-4 text-emerald-500 ml-auto opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Registered Investors</h4>
                        <div class="flex flex-wrap gap-2 px-2">
                            @for($i=1; $i<=8; $i++)
                            <div class="w-10 h-10 rounded-2xl bg-white border-2 border-emerald-50 flex items-center justify-center font-black text-[10px] text-gray-400 hover:border-emerald-200 hover:text-emerald-600 transition-all cursor-pointer shadow-sm" title="Investor Name">I{{ $i }}</div>
                            @endfor
                            <div class="w-10 h-10 rounded-2xl bg-emerald-50 border-2 border-emerald-100 flex items-center justify-center font-black text-[10px] text-emerald-600">+14</div>
                        </div>
                        <div class="mt-8 p-4 bg-white/30 rounded-2xl border border-white/50">
                            <p class="text-[10px] font-black text-emerald-700 uppercase tracking-widest mb-1">Live Status</p>
                            <p class="text-sm font-medium text-gray-600">Event registration is currently open. 85% capacity reached.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Sidebar -->
        <div class="space-y-6">
            <div class="bg-[#E9E9EB] p-8 rounded-[3rem] border border-transparent hover:border-white transition-all duration-300 shadow-sm">
                <h3 class="text-lg font-black mb-6">Past Events</h3>
                <div class="space-y-6">
                    @for($i=1; $i<=3; $i++)
                    <div class="flex items-center space-x-4 group cursor-pointer">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shrink-0 border border-gray-100 group-hover:border-emerald-200 transition-colors">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-sm font-bold text-gray-700 truncate">Winter Demo Day 2023</p>
                            <p class="text-[10px] text-gray-400 font-medium">Dec 12, 2023 • 18 Startups</p>
                        </div>
                    </div>
                    @endfor
                </div>
                <button class="w-full mt-8 py-4 bg-white hover:bg-emerald-50 text-emerald-600 rounded-2xl text-xs font-black uppercase tracking-widest transition-all">View Archive</button>
            </div>
        </div>
    </div>
</div>
@endsection
