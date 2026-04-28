@extends('layouts.dashboard')

@section('dashboard-title', 'Memberships Management')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Header with Actions -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black text-gray-900">Hub Memberships</h2>
            <p class="text-sm text-gray-500 font-medium">Manage member plans and subscription cycles.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>Create Plan</span>
        </button>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @php
            $stats_data = [
                ['label' => 'Total Members', 'value' => $stats['total'] ?? 0, 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'color' => 'blue'],
                ['label' => 'Active Plans', 'value' => $stats['active'] ?? 0, 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'emerald'],
                ['label' => 'Expiring Soon', 'value' => $stats['expiring_soon'] ?? 0, 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'amber'],
                ['label' => 'Revenue (MTD)', 'value' => 'TSh ' . number_format($stats['revenue'] ?? 0), 'icon' => 'M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z', 'color' => 'purple'],
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
                    <h3 class="text-xl font-black text-gray-900">{{ $stat['value'] }}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Table Section -->
    <div class="bg-[#E9E9EB] rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 overflow-hidden shadow-sm">
        <div class="p-8 border-b border-gray-200/50 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <h3 class="text-lg font-bold text-gray-800">Active Subscriptions</h3>
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <input type="text" placeholder="Search members..." class="bg-white/50 border-0 rounded-xl px-10 py-2.5 text-sm focus:ring-2 focus:ring-emerald-500 w-64">
                    <svg class="w-4 h-4 text-gray-400 absolute left-4 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </div>
                <button class="p-2.5 bg-white/50 rounded-xl hover:bg-white transition-colors">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" /></svg>
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-200/50">
                        <th class="px-8 py-6">Member</th>
                        <th class="px-8 py-6">Plan Details</th>
                        <th class="px-8 py-6">Timeline</th>
                        <th class="px-8 py-6">Status</th>
                        <th class="px-8 py-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200/50">
                    @forelse($memberships as $membership)
                    <tr class="hover:bg-white/30 transition-all duration-200 group">
                        <td class="px-8 py-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center font-bold text-gray-400 shadow-sm border border-gray-100 group-hover:border-emerald-200 transition-colors">
                                    {{ substr($membership->user->first_name ?? 'U', 0, 1) }}
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">{{ $membership->user->first_name }} {{ $membership->user->last_name }}</p>
                                    <p class="text-[10px] text-gray-400 font-medium">{{ $membership->user->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-3 py-1 bg-white rounded-lg text-[10px] font-bold text-gray-600 border border-gray-100 uppercase tracking-wider">{{ $membership->plan_type ?? 'Standard' }}</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col">
                                <span class="text-xs font-bold text-gray-700">{{ $membership->start_date?->format('d M, Y') ?? '-' }}</span>
                                <span class="text-[10px] text-gray-400 font-medium">Ends: {{ $membership->end_date?->format('d M, Y') ?? '-' }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            @if($membership->status === 'active')
                                <span class="px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">Active</span>
                            @elseif($membership->status === 'expired')
                                <span class="px-4 py-1.5 bg-pink-100 text-pink-700 rounded-full text-[10px] font-black uppercase tracking-widest">Expired</span>
                            @else
                                <span class="px-4 py-1.5 bg-gray-200 text-gray-600 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $membership->status }}</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 hover:bg-emerald-100 text-emerald-600 rounded-xl transition-colors" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </button>
                                <button class="p-2 hover:bg-pink-100 text-pink-600 rounded-xl transition-colors" title="Delete">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-white/50 rounded-[1.5rem] flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                </div>
                                <p class="text-gray-400 font-bold italic">No memberships found.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($memberships->hasPages())
        <div class="px-8 py-6 bg-white/30 border-t border-gray-200/50">
            {{ $memberships->links() }}
        </div>
        @endif
    </div>
</div>
@endsection

@endsection
