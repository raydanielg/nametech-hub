@extends('layouts.dashboard')

@section('dashboard-title', 'All Events')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Events</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Upcoming</p>
            <h3 class="text-2xl font-black text-blue-600">{{ $stats['upcoming'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Past Events</p>
            <h3 class="text-2xl font-black text-gray-500">{{ $stats['past'] }}</h3>
        </div>
    </div>

    <!-- Events Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($events as $event)
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h4 class="font-black text-gray-900">{{ $event->title }}</h4>
                    <p class="text-xs text-gray-400 mt-1">{{ $event->event_type ?? 'General' }}</p>
                </div>
                @if($event->start_date >= now())
                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase">Upcoming</span>
                @else
                    <span class="px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-[10px] font-black uppercase">Past</span>
                @endif
            </div>
            <div class="space-y-2 text-sm text-gray-600">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>{{ $event->start_date?->format('M d, Y') }} @ {{ $event->start_time?->format('H:i') ?? 'TBD' }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    <span>{{ $event->location ?? 'Online' }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span>{{ $event->registrations_count ?? 0 }} Registrations</span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-2 bg-white p-10 rounded-3xl text-center text-gray-400 italic">No events scheduled yet.</div>
        @endforelse
    </div>
    
    @if($events->hasPages())
    <div class="bg-white p-4 rounded-3xl">{{ $events->links() }}</div>
    @endif
</div>
@endsection
