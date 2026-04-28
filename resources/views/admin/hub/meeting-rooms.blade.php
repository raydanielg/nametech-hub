@extends('layouts.dashboard')

@section('dashboard-title', 'Meeting Rooms')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Meeting Rooms</h2>
            <p class="text-sm text-gray-500 font-medium">Schedule and manage conference rooms and collaborative spaces.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>New Booking</span>
        </button>
    </div>

    <!-- Calendar Preview or Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @php
            $rooms = [
                ['name' => 'Board Room', 'capacity' => '12 Persons', 'status' => 'Occupied', 'color' => 'emerald', 'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=400'],
                ['name' => 'Innovation Lab', 'capacity' => '6 Persons', 'status' => 'Available', 'color' => 'blue', 'image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&q=80&w=400'],
                ['name' => 'Focus Pod 1', 'capacity' => '2 Persons', 'status' => 'Available', 'color' => 'amber', 'image' => 'https://images.unsplash.com/photo-1517502884422-41eaead166d4?auto=format&fit=crop&q=80&w=400'],
            ];
        @endphp

        @foreach($rooms as $room)
        <div class="bg-[#E9E9EB] rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group overflow-hidden shadow-sm">
            <div class="h-48 relative">
                <img src="{{ $room['image'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="{{ $room['name'] }}">
                <div class="absolute top-4 right-4">
                    <span class="px-4 py-1.5 {{ $room['status'] === 'Available' ? 'bg-emerald-500' : 'bg-pink-500' }} text-white rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg">{{ $room['status'] }}</span>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-lg font-black mb-1 group-hover:text-emerald-600 transition-colors">{{ $room['name'] }}</h3>
                <div class="flex items-center text-xs text-gray-500 font-medium space-x-4">
                    <span class="flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        <span>{{ $room['capacity'] }}</span>
                    </span>
                    <span class="flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Smart TV • Whiteboard</span>
                    </span>
                </div>
                <button class="w-full mt-6 py-4 bg-white hover:bg-emerald-50 text-emerald-600 rounded-2xl text-xs font-black uppercase tracking-widest transition-all border border-transparent hover:border-emerald-100">Schedule Room</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
