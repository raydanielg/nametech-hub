@extends('layouts.dashboard')

@section('dashboard-title', 'Scale (Acceleration)')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Scale Program</h2>
            <p class="text-sm text-gray-500 font-medium">Acceleration stage for startups ready for market expansion and scaling.</p>
        </div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-blue-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
            <span>Add Scaling Startup</span>
        </button>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @php
            $stats_data = [
                ['label' => 'Active Startups', 'value' => $stats['active'] ?? 0, 'icon' => 'M7 11l5-5m0 0l5 5m-5-5v12', 'color' => 'blue'],
                ['label' => 'Total Funding', 'value' => 'TSh ' . number_format($stats['funding'] ?? 0), 'icon' => 'M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z', 'color' => 'emerald'],
                ['label' => 'Market Ready', 'value' => $stats['market_ready'] ?? 12, 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'amber'],
                ['label' => 'Success Rate', 'value' => ($stats['success_rate'] ?? 92) . '%', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'purple'],
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

    <!-- Scaling Startups Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($startups ?? [] as $startup)
        <div class="bg-[#E9E9EB] p-6 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group shadow-sm relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-500/5 rounded-full blur-2xl"></div>
            
            <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm font-black text-xl text-blue-600 border border-blue-50">
                    {{ substr($startup->name, 0, 1) }}
                </div>
                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-[10px] font-black uppercase tracking-widest italic">Scaling</span>
            </div>

            <h3 class="text-lg font-black group-hover:text-blue-600 transition-colors">{{ $startup->name }}</h3>
            <p class="text-xs text-gray-500 font-medium mt-1">Valuation: TSh 250M+</p>
            
            <div class="mt-6 pt-6 border-t border-gray-200/50 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Expansion Phase</span>
                </div>
                <button class="text-xs font-black uppercase tracking-widest text-blue-600 hover:underline">Details</button>
            </div>
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
