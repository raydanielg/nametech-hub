@extends('layouts.dashboard')

@section('dashboard-title', 'Scale Program')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Startups</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total_startups'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Active Now</p>
            <h3 class="text-2xl font-black text-blue-600">{{ $stats['active'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Funded</p>
            <h3 class="text-2xl font-black text-green-600">{{ $stats['funded'] }}</h3>
        </div>
    </div>

    <!-- Startups Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Startup Name</th>
                        <th class="px-8 py-5">Founder</th>
                        <th class="px-8 py-5">Cohort</th>
                        <th class="px-8 py-5">Status</th>
                        <th class="px-8 py-5">Funding Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($startups as $startup)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-50 text-green-600 rounded-xl flex items-center justify-center font-bold">{{ substr($startup->name, 0, 1) }}</div>
                                <span class="text-sm font-bold text-gray-800">{{ $startup->name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $startup->founder->first_name ?? '-' }} {{ $startup->founder->last_name ?? '' }}</td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $startup->cohort->name ?? 'N/A' }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase">{{ $startup->status }}</span>
                        </td>
                        <td class="px-8 py-5">
                            @if($startup->funding_status === 'funded')
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase">Funded</span>
                            @else
                                <span class="px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-[10px] font-black uppercase">{{ $startup->funding_status ?? 'Bootstrapped' }}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No startups in Scale program yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($startups->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $startups->links() }}</div>
        @endif
    </div>
</div>
@endsection
