@extends('layouts.dashboard')

@section('dashboard-title', 'Coworking Spaces')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Coworking Spaces</h2>
            <p class="text-sm text-gray-500 font-medium">Manage and monitor desk availability and workspace bookings.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>Add Workspace</span>
        </button>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @php
            $coworking_stats = [
                ['label' => 'Total Desks', 'value' => '45', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'color' => 'blue'],
                ['label' => 'Occupied', 'value' => '32', 'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'color' => 'emerald'],
                ['label' => 'Available', 'value' => '13', 'icon' => 'M5 13l4 4L19 7', 'color' => 'amber'],
                ['label' => 'Today\'s Bookings', 'value' => '8', 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'color' => 'purple'],
            ];
        @endphp

        @foreach($coworking_stats as $stat)
        <div class="bg-[#E9E9EB] p-5 rounded-[2rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}" /></svg>
                </div>
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ $stat['label'] }}</p>
                    <h3 class="text-xl font-black text-gray-900">{{ $stat['value'] }}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Workspace Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for($i = 1; $i <= 6; $i++)
        <div class="bg-[#E9E9EB] p-6 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm">
            <div class="flex justify-between items-start mb-6">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                </div>
                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">Available</span>
            </div>

            <h3 class="text-lg font-black mb-1 group-hover:text-emerald-600 transition-colors">Dedicated Desk D-0{{ $i }}</h3>
            <p class="text-xs text-gray-500 font-medium mb-4 italic">Zone A • High Speed WiFi • Power Outlet</p>

            <div class="pt-4 border-t border-gray-200/50 flex items-center justify-between">
                <div class="flex -space-x-2">
                    <div class="w-8 h-8 rounded-full bg-white border-2 border-[#E9E9EB] flex items-center justify-center text-[10px] font-bold text-gray-400">?</div>
                </div>
                <button class="text-xs font-black uppercase tracking-widest text-emerald-600 hover:text-emerald-700 transition-colors">Book Now</button>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
