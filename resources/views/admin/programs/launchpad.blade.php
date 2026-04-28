@extends('layouts.dashboard')

@section('dashboard-title', 'Launchpad (Incubation)')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Launchpad Program</h2>
            <p class="text-sm text-gray-500 font-medium">Incubation stage for early-stage startups and innovative ideas.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>New Startup</span>
        </button>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @php
            $stats_data = [
                ['label' => 'Total Startups', 'value' => $stats['total'] ?? 0, 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'blue'],
                ['label' => 'Active Cohort', 'value' => $stats['active_cohort'] ?? 'Cohort 4', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'color' => 'emerald'],
                ['label' => 'Avg. Progress', 'value' => ($stats['avg_progress'] ?? 65) . '%', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'color' => 'amber'],
                ['label' => 'Graduated', 'value' => $stats['graduated'] ?? 124, 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.286-6.857L1 12l7.714-2.143L11 3z', 'color' => 'purple'],
            ];
        @endphp
        @foreach($stats_data as $stat)
        <div class="bg-[#E9E9EB] p-5 rounded-[2rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}" /></svg>
                </div>
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ $stat['label'] }}</p>
                    <h3 class="text-xl font-black">{{ $stat['value'] }}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Startups Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($startups ?? [] as $startup)
        <div class="bg-[#E9E9EB] p-6 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm font-black text-xl text-emerald-600 border border-emerald-50">
                    {{ substr($startup->name, 0, 1) }}
                </div>
                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">In-Progress</span>
            </div>
            <h3 class="text-lg font-black group-hover:text-emerald-600 transition-colors">{{ $startup->name }}</h3>
            <p class="text-xs text-gray-500 font-medium mt-1 line-clamp-2">{{ $startup->description }}</p>
            
            <div class="mt-6 pt-6 border-t border-gray-200/50">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Program Progress</span>
                    <span class="text-[10px] font-black text-emerald-600 uppercase tracking-widest">75%</span>
                </div>
                <div class="w-full h-2 bg-white rounded-full overflow-hidden shadow-inner">
                    <div class="w-3/4 h-full bg-emerald-500 rounded-full"></div>
                </div>
            </div>
        </div>
        @empty
        <!-- Sample for Visuals -->
        @for($i=1; $i<=3; $i++)
        <div class="bg-[#E9E9EB] p-6 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm font-black text-xl text-emerald-600 border border-emerald-50">
                    S
                </div>
                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">Active</span>
            </div>
            <h3 class="text-lg font-black group-hover:text-emerald-600 transition-colors">Startup Example {{ $i }}</h3>
            <p class="text-xs text-gray-500 font-medium mt-1 line-clamp-2">Building next-gen AI solutions for the future of tech hub management.</p>
            
            <div class="mt-6 pt-6 border-t border-gray-200/50">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Incubation Phase</span>
                    <span class="text-[10px] font-black text-emerald-600 uppercase tracking-widest">60%</span>
                </div>
                <div class="w-full h-2 bg-white rounded-full overflow-hidden shadow-inner">
                    <div class="w-[60%] h-full bg-emerald-500 rounded-full"></div>
                </div>
            </div>
        </div>
        @endfor
        @endforelse
    </div>
</div>
@endsection
