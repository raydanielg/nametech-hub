@extends('layouts.dashboard')

@section('dashboard-title', 'Cohorts')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Program Cohorts</h2>
            <p class="text-sm text-gray-500 font-medium">Manage and track time-bound startup batches across programs.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>New Cohort</span>
        </button>
    </div>

    <!-- Cohorts Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($cohorts ?? [] as $cohort)
        <div class="bg-[#E9E9EB] p-8 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex justify-between items-start mb-6">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <span class="px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">Active</span>
            </div>

            <h3 class="text-xl font-black mb-2 group-hover:text-emerald-600 transition-colors">{{ $cohort->name ?? 'Cohort 2024 - Batch A' }}</h3>
            <p class="text-xs text-gray-500 font-medium mb-6">Launchpad • 12 Startups • Ends in 3 months</p>

            <div class="space-y-4">
                <div class="flex items-center justify-between text-[11px] font-black uppercase tracking-widest text-gray-400">
                    <span>Overall Progress</span>
                    <span class="text-emerald-600">45%</span>
                </div>
                <div class="w-full h-2.5 bg-white rounded-full overflow-hidden shadow-inner">
                    <div class="w-[45%] h-full bg-emerald-500 rounded-full shadow-[0_0_10px_rgba(16,185,129,0.3)]"></div>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200/50 flex items-center justify-between">
                <div class="flex -space-x-3">
                    @for($i=1; $i<=4; $i++)
                    <div class="w-10 h-10 rounded-2xl bg-white border-4 border-[#E9E9EB] flex items-center justify-center text-xs font-bold text-gray-400">S</div>
                    @endfor
                    <div class="w-10 h-10 rounded-2xl bg-emerald-50 border-4 border-[#E9E9EB] flex items-center justify-center text-[10px] font-black text-emerald-600">+8</div>
                </div>
                <button class="p-3 bg-white hover:bg-emerald-50 text-emerald-600 rounded-2xl transition-all border border-transparent hover:border-emerald-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </div>
        </div>
        @empty
        <!-- Sample data for visuals -->
        @for($i=1; $i<=3; $i++)
        <div class="bg-[#E9E9EB] p-8 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex justify-between items-start mb-6">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <span class="px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">In Progress</span>
            </div>
            <h3 class="text-xl font-black mb-2 group-hover:text-emerald-600 transition-colors">Cohort {{ $i }} - 2024</h3>
            <p class="text-xs text-gray-500 font-medium mb-6">Launchpad • 15 Startups • Active</p>
            <div class="w-full h-2.5 bg-white rounded-full overflow-hidden shadow-inner mb-8">
                <div class="w-[65%] h-full bg-emerald-500 rounded-full"></div>
            </div>
            <button class="w-full py-4 bg-white hover:bg-emerald-50 text-emerald-600 rounded-2xl text-xs font-black uppercase tracking-widest transition-all border border-transparent hover:border-emerald-100">Manage Cohort</button>
        </div>
        @endfor
        @endforelse
    </div>
</div>
@endsection
