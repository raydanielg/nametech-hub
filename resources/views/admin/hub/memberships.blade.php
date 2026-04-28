@extends('layouts.dashboard')

@section('dashboard-title', 'Hub Memberships')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Memberships</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Active</p>
            <h3 class="text-2xl font-black text-green-600">{{ $stats['active'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Expiring Soon</p>
            <h3 class="text-2xl font-black text-pink-600">{{ $stats['expiring_soon'] }}</h3>
        </div>
    </div>

    <!-- Memberships Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Member</th>
                        <th class="px-8 py-5">Plan Type</th>
                        <th class="px-8 py-5">Start Date</th>
                        <th class="px-8 py-5">End Date</th>
                        <th class="px-8 py-5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($memberships as $membership)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-pink-50 text-pink-600 rounded-xl flex items-center justify-center font-bold">
                                    {{ substr($membership->user->first_name ?? 'U', 0, 1) }}
                                </div>
                                <span class="text-sm font-bold text-gray-800">{{ $membership->user->first_name }} {{ $membership->user->last_name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-600 font-medium">{{ $membership->plan_type ?? 'Standard' }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $membership->start_date?->format('M d, Y') ?? '-' }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $membership->end_date?->format('M d, Y') ?? '-' }}</td>
                        <td class="px-8 py-5">
                            @if($membership->status === 'active')
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase">Active</span>
                            @else
                                <span class="px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-[10px] font-black uppercase">{{ $membership->status }}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No memberships found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($memberships->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $memberships->links() }}</div>
        @endif
    </div>
</div>
@endsection
