@extends('layouts.dashboard')

@section('dashboard-title', 'Launchpad Startups')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Startup</th>
                        <th class="px-8 py-5">Founder</th>
                        <th class="px-8 py-5">Status</th>
                        <th class="px-8 py-5">Progress</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($startups as $startup)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-pink-50 text-pink-600 rounded-xl flex items-center justify-center font-bold">{{ substr($startup->name, 0, 1) }}</div>
                                <span class="text-sm font-bold text-gray-800">{{ $startup->name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $startup->founder->first_name ?? '-' }} {{ $startup->founder->last_name ?? '' }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-[10px] font-black uppercase">{{ $startup->status }}</span>
                        </td>
                        <td class="px-8 py-5 w-32">
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-pink-600 h-1.5 rounded-full" style="width: {{ $startup->progress ?? 0 }}%"></div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="px-8 py-10 text-center text-gray-400 italic">No startups in Launchpad yet.</td></tr>
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
