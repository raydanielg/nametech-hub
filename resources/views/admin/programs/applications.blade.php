@extends('layouts.dashboard')

@section('dashboard-title', 'Applications')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Program Applications</h2>
            <p class="text-sm text-gray-500 font-medium">Review and manage incoming startup applications for all hub programs.</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="bg-[#E9E9EB] hover:bg-white text-gray-700 px-6 py-3 rounded-2xl font-bold text-sm transition-all flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" /></svg>
                <span>Filter</span>
            </button>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @php
            $app_stats = [
                ['label' => 'Total Applications', 'value' => $stats['total'] ?? 0, 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'blue'],
                ['label' => 'Pending Review', 'value' => $stats['pending'] ?? 0, 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'amber'],
                ['label' => 'Accepted', 'value' => $stats['accepted'] ?? 0, 'icon' => 'M5 13l4 4L19 7', 'color' => 'emerald'],
                ['label' => 'Rejected', 'value' => $stats['rejected'] ?? 0, 'icon' => 'M6 18L18 6M6 6l12 12', 'color' => 'pink'],
            ];
        @endphp
        @foreach($app_stats as $stat)
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

    <!-- Applications Table -->
    <div class="bg-[#E9E9EB] rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-200/50">
                        <th class="px-8 py-6">Applicant</th>
                        <th class="px-8 py-6">Program</th>
                        <th class="px-8 py-6">Applied On</th>
                        <th class="px-8 py-6">Status</th>
                        <th class="px-8 py-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200/50">
                    @forelse($applications as $application)
                    <tr class="hover:bg-white/30 transition-all duration-200 group">
                        <td class="px-8 py-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center font-bold text-gray-400 border border-gray-100 group-hover:border-emerald-200 transition-colors">
                                    {{ substr($application->startup_name ?? 'S', 0, 1) }}
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">{{ $application->startup_name }}</p>
                                    <p class="text-[10px] text-gray-400 font-medium">{{ $application->user->email ?? 'no-email@hub.com' }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-3 py-1 bg-white rounded-lg text-[10px] font-bold text-gray-600 border border-gray-100 uppercase tracking-wider">{{ $application->program_type ?? 'Launchpad' }}</span>
                        </td>
                        <td class="px-8 py-6 text-sm text-gray-500 font-medium">
                            {{ $application->created_at->format('d M, Y') }}
                        </td>
                        <td class="px-8 py-6">
                            @php
                                $status_colors = [
                                    'pending' => 'bg-amber-100 text-amber-700',
                                    'accepted' => 'bg-emerald-100 text-emerald-700',
                                    'rejected' => 'bg-pink-100 text-pink-700',
                                    'reviewed' => 'bg-blue-100 text-blue-700'
                                ];
                                $color = $status_colors[$application->status] ?? 'bg-gray-200 text-gray-600';
                            @endphp
                            <span class="px-4 py-1.5 {{ $color }} rounded-full text-[10px] font-black uppercase tracking-widest">{{ $application->status }}</span>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <button class="p-3 bg-white hover:bg-emerald-50 text-gray-400 hover:text-emerald-600 rounded-2xl transition-all shadow-sm border border-gray-50 opacity-0 group-hover:opacity-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-white rounded-[1.5rem] flex items-center justify-center mb-4 shadow-sm border border-gray-100">
                                    <svg class="w-8 h-8 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                </div>
                                <p class="text-gray-400 font-bold italic">No applications found.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($applications->hasPages())
        <div class="px-8 py-6 bg-white/30 border-t border-gray-200/50">
            {{ $applications->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
