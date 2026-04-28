@extends('layouts.dashboard')

@section('dashboard-title', 'My Mentees')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($mentees as $mentee)
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex flex-col items-center">
            <div class="w-20 h-20 rounded-2xl bg-pink-50 flex items-center justify-center mb-4">
                <span class="text-2xl font-black text-pink-600">{{ substr($mentee->first_name, 0, 1) }}</span>
            </div>
            <h4 class="font-black text-gray-900">{{ $mentee->first_name }} {{ $mentee->last_name }}</h4>
            <p class="text-xs text-gray-400 mb-4">{{ $mentee->email }}</p>
            <button class="w-full py-3 bg-gray-50 text-gray-700 rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-gray-100 transition">View Profile</button>
        </div>
        @empty
        <div class="col-span-full bg-white p-20 rounded-[2rem] text-center border border-gray-100">
            <p class="text-gray-400 text-sm italic">No mentees assigned to you yet.</p>
        </div>
        @endforelse
    </div>
    @if($mentees->hasPages())
    <div class="bg-white p-6 rounded-[2rem] border border-gray-100">{{ $mentees->links() }}</div>
    @endif
</div>
@endsection
