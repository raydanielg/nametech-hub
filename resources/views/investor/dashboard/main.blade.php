@extends('layouts.dashboard')

@section('dashboard-title', 'Investor Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Investor Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Active Startups</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['active_startups'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-pink-600 mb-1">In Hub</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">Recent Deals</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['recent_deals'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-blue-500 mb-1">Last 30 Days</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em] mb-4">My Portfolio</p>
            <div class="flex items-end justify-between">
                <h3 class="text-4xl font-black text-gray-900">{{ $stats['portfolio_count'] ?? 0 }}</h3>
                <span class="text-xs font-bold text-green-500 mb-1">Startups</span>
            </div>
        </div>
    </div>

    <!-- Deal Flow Preview -->
    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-xl font-black text-gray-900">Featured Startups</h3>
            <a href="{{ route('investor.pipeline') }}" class="text-xs font-black text-pink-600 uppercase tracking-widest hover:underline">View Pipeline</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <p class="text-gray-400 text-sm italic col-span-2 text-center py-10">No featured startups at the moment.</p>
        </div>
    </div>
</div>
@endsection
