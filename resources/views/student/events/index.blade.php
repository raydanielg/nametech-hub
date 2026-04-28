@extends('layouts.dashboard')

@section('dashboard-title', 'Community Events')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($events as $event)
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex items-center space-x-6">
            <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-2xl flex flex-col items-center justify-center">
                <span class="text-xl font-black">{{ $event->start_date?->format('d') }}</span>
                <span class="text-[10px] font-black uppercase tracking-widest">{{ $event->start_date?->format('M') }}</span>
            </div>
            <div class="flex-1">
                <h4 class="font-black text-gray-900">{{ $event->title }}</h4>
                <p class="text-xs text-gray-400 mt-1">{{ $event->location ?? 'Online' }}</p>
                <button class="mt-4 text-xs font-black text-pink-600 uppercase tracking-widest hover:underline">Register</button>
            </div>
        </div>
        @empty
        <div class="col-span-full bg-white p-20 rounded-[2rem] text-center border border-gray-100">
            <p class="text-gray-400 text-sm italic">No upcoming events found.</p>
        </div>
        @endforelse
    </div>
    @if($events->hasPages())
    <div class="bg-white p-6 rounded-[2rem] border border-gray-100">{{ $events->links() }}</div>
    @endif
</div>
@endsection
