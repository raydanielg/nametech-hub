@extends('layouts.dashboard')

@section('dashboard-title', 'Startup Milestones')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    @if($milestones->isNotEmpty())
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Milestone Title</th>
                        <th class="px-8 py-5">Due Date</th>
                        <th class="px-8 py-5">Status</th>
                        <th class="px-8 py-5">Achievement</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($milestones as $milestone)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <p class="text-sm font-bold text-gray-800">{{ $milestone->title }}</p>
                            <p class="text-xs text-gray-400 mt-1 line-clamp-1">{{ $milestone->description }}</p>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-400 font-medium">{{ $milestone->due_date?->format('M d, Y') ?? 'TBD' }}</td>
                        <td class="px-8 py-5">
                            @if($milestone->status === 'completed')
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase tracking-tighter">Completed</span>
                            @elseif($milestone->due_date < now() && $milestone->status !== 'completed')
                                <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-[10px] font-black uppercase tracking-tighter">Overdue</span>
                            @else
                                <span class="px-3 py-1 bg-yellow-50 text-yellow-600 rounded-full text-[10px] font-black uppercase tracking-tighter">In Progress</span>
                            @endif
                        </td>
                        <td class="px-8 py-5">
                            @if($milestone->status === 'completed')
                                <div class="w-8 h-8 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                </div>
                            @else
                                <div class="w-8 h-8 bg-gray-50 text-gray-300 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($milestones->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $milestones->links() }}</div>
        @endif
    </div>
    @else
    <div class="bg-white p-20 rounded-[2rem] text-center border border-gray-100">
        <h3 class="text-xl font-black text-gray-900 mb-2">No Milestones Set</h3>
        <p class="text-gray-400 text-sm mb-8">Set milestones to track your startup progress and unlock new features.</p>
        <button class="px-8 py-4 bg-pink-600 text-white rounded-2xl font-black text-sm uppercase tracking-widest shadow-lg shadow-pink-200 hover:scale-105 transition">Add Milestone</button>
    </div>
    @endif
</div>
@endsection
