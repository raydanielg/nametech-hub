@extends('layouts.dashboard')

@section('dashboard-title', 'Program Applications')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Pending</p>
            <h3 class="text-2xl font-black text-yellow-600">{{ $stats['pending'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Approved</p>
            <h3 class="text-2xl font-black text-green-600">{{ $stats['approved'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Rejected</p>
            <h3 class="text-2xl font-black text-pink-600">{{ $stats['rejected'] }}</h3>
        </div>
    </div>

    <!-- Applications Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Applicant</th>
                        <th class="px-8 py-5">Startup</th>
                        <th class="px-8 py-5">Program</th>
                        <th class="px-8 py-5">Applied</th>
                        <th class="px-8 py-5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($applications as $application)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-pink-50 text-pink-600 rounded-xl flex items-center justify-center font-bold">{{ substr($application->user->first_name ?? 'U', 0, 1) }}</div>
                                <span class="text-sm font-bold text-gray-800">{{ $application->user->first_name ?? '-' }} {{ $application->user->last_name ?? '' }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $application->startup->name ?? 'N/A' }}</td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $application->program_type ?? $application->program_name ?? 'General' }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $application->created_at?->format('M d, Y') }}</td>
                        <td class="px-8 py-5">
                            @if($application->status === 'approved')
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase">Approved</span>
                            @elseif($application->status === 'pending')
                                <span class="px-3 py-1 bg-yellow-50 text-yellow-600 rounded-full text-[10px] font-black uppercase">Pending</span>
                            @else
                                <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-[10px] font-black uppercase">Rejected</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No applications found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($applications->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $applications->links() }}</div>
        @endif
    </div>
</div>
@endsection
