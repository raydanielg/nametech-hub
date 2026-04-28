@extends('layouts.dashboard')

@section('dashboard-title', 'Startup Pipeline')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($startups as $startup)
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex flex-col">
            <div class="w-16 h-16 rounded-2xl bg-gray-50 flex items-center justify-center mb-4">
                <span class="text-xl font-black text-gray-900">{{ substr($startup->name, 0, 1) }}</span>
            </div>
            <h4 class="font-black text-gray-900 mb-1">{{ $startup->name }}</h4>
            <p class="text-xs text-pink-600 font-bold uppercase tracking-widest mb-4">{{ $startup->industry ?? 'Technology' }}</p>
            <p class="text-xs text-gray-400 line-clamp-2 mb-6">{{ $startup->description }}</p>
            
            <div class="mt-auto pt-4 border-t border-gray-50 flex justify-between items-center">
                <span class="text-[10px] font-black text-gray-400 uppercase">Stage: Seed</span>
                <button class="px-4 py-2 bg-pink-600 text-white rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-pink-100 hover:scale-105 transition">View Pitch</button>
            </div>
        </div>
        @empty
        <div class="col-span-full bg-white p-20 rounded-[2rem] text-center border border-gray-100">
            <p class="text-gray-400 text-sm italic">No startups available in the pipeline.</p>
        </div>
        @endforelse
    </div>
    @if($startups->hasPages())
    <div class="bg-white p-6 rounded-[2rem] border border-gray-100">{{ $startups->links() }}</div>
    @endif
</div>
@endsection
