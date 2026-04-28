@extends('layouts.dashboard')

@section('dashboard-title', 'Hub Members')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black text-gray-900">Hub Members</h2>
            <p class="text-sm text-gray-500 font-medium">Manage and track all registered hub members.</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="bg-white hover:bg-gray-50 text-gray-700 px-6 py-3 rounded-2xl font-bold text-sm border border-gray-100 transition-all flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                <span>Export</span>
            </button>
            <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                <span>Add Member</span>
            </button>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="bg-[#E9E9EB] p-4 rounded-[2rem] flex flex-wrap items-center gap-4 shadow-sm">
        <div class="relative flex-1 min-w-[300px]">
            <input type="text" placeholder="Search by name, email or ID..." class="w-full bg-white/50 border-0 rounded-2xl px-12 py-3 text-sm focus:ring-2 focus:ring-emerald-500 transition-all">
            <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
        </div>
        <select class="bg-white/50 border-0 rounded-2xl px-6 py-3 text-sm font-bold text-gray-600 focus:ring-2 focus:ring-emerald-500 min-w-[150px]">
            <option>All Membership</option>
            <option>Standard</option>
            <option>Premium</option>
            <option>Enterprise</option>
        </select>
        <select class="bg-white/50 border-0 rounded-2xl px-6 py-3 text-sm font-bold text-gray-600 focus:ring-2 focus:ring-emerald-500 min-w-[150px]">
            <option>Status: All</option>
            <option>Active</option>
            <option>Inactive</option>
            <option>Pending</option>
        </select>
    </div>

    <!-- Members Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse($members as $member)
        <div class="bg-[#E9E9EB] p-6 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 group relative overflow-hidden shadow-sm">
            <div class="absolute top-0 right-0 p-4">
                <div class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">Active</div>
            </div>
            
            <div class="flex flex-col items-center text-center space-y-4">
                <div class="relative">
                    <div class="w-20 h-20 bg-white rounded-[2rem] flex items-center justify-center font-black text-2xl text-gray-400 shadow-sm border border-gray-100 group-hover:scale-105 transition-transform duration-300">
                        {{ substr($member->first_name ?? 'U', 0, 1) }}
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-emerald-500 border-4 border-[#E9E9EB] rounded-full"></div>
                </div>

                <div>
                    <h3 class="font-black text-gray-900 group-hover:text-emerald-600 transition-colors">{{ $member->first_name }} {{ $member->last_name }}</h3>
                    <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest mt-1">{{ $member->membership_type ?? 'Community Member' }}</p>
                </div>

                <div class="w-full pt-4 border-t border-gray-200/50 space-y-2">
                    <div class="flex items-center justify-between text-[11px] font-bold">
                        <span class="text-gray-400 uppercase tracking-widest">Joined</span>
                        <span class="text-gray-700">{{ $member->created_at->format('M Y') }}</span>
                    </div>
                    <div class="flex items-center justify-between text-[11px] font-bold">
                        <span class="text-gray-400 uppercase tracking-widest">Projects</span>
                        <span class="text-gray-700">12</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2 pt-2">
                    <button class="p-3 bg-white hover:bg-emerald-50 text-gray-400 hover:text-emerald-600 rounded-2xl transition-all shadow-sm border border-gray-50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </button>
                    <button class="p-3 bg-white hover:bg-emerald-50 text-gray-400 hover:text-emerald-600 rounded-2xl transition-all shadow-sm border border-gray-50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </button>
                    <button class="p-3 bg-white hover:bg-pink-50 text-gray-400 hover:text-pink-600 rounded-2xl transition-all shadow-sm border border-gray-50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg>
                    </button>
                </div>
            </div>
        </div>
        @empty
        <div class="lg:col-span-4 py-20 bg-[#E9E9EB] rounded-[3rem] flex flex-col items-center justify-center text-center space-y-4">
            <div class="w-20 h-20 bg-white rounded-[2rem] flex items-center justify-center shadow-sm">
                <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
            </div>
            <p class="text-gray-400 font-bold italic">No members found.</p>
        </div>
        @endforelse
    </div>

    @if($members->hasPages())
    <div class="mt-8">
        {{ $members->links() }}
    </div>
    @endif
</div>
@endsection
