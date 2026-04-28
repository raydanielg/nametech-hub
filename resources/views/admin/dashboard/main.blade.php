@extends('layouts.dashboard')

@section('dashboard-title', 'Admin Overview')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-pink-50 text-pink-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <span class="text-green-500 text-xs font-bold">+5%</span>
            </div>
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Total Users</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">2,840</h3>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="text-blue-500 text-xs font-bold">12 New</span>
            </div>
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Active Startups</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">156</h3>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
                </div>
                <span class="text-green-500 text-xs font-bold">+TSh 2.4M</span>
            </div>
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">MTD Revenue</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">TSh 48.5M</h3>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <span class="text-purple-500 text-xs font-bold">98.2%</span>
            </div>
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Uptime</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">Healthy</h3>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- System Status -->
        <div class="lg:col-span-2 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-gray-900">System Activity</h3>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-gray-50 text-gray-400 rounded-lg text-xs font-bold uppercase">Last 24 Hours</span>
                </div>
            </div>
            <div class="space-y-6">
                @foreach(['User Registration', 'Payment Processed', 'Startup Application', 'Resource Uploaded'] as $activity)
                <div class="flex items-center justify-between p-4 bg-gray-50/50 rounded-2xl border border-gray-100/50">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-2 rounded-full bg-pink-500"></div>
                        <div>
                            <p class="text-sm font-bold text-gray-800">{{ $activity }}</p>
                            <p class="text-xs text-gray-400">Occurred at {{ now()->subMinutes(rand(1, 60))->format('H:i A') }}</p>
                        </div>
                    </div>
                    <button class="text-xs font-bold text-pink-600 hover:underline">View Details</button>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Pending Approvals -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-8">Pending Items</h3>
            <div class="space-y-6">
                <div class="p-4 bg-pink-50/30 rounded-2xl border border-pink-100/50">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-pink-100 text-pink-600 rounded text-[10px] font-bold uppercase">Users</span>
                        <span class="text-xs text-gray-400 font-medium">8 Pending</span>
                    </div>
                    <p class="text-sm font-bold text-gray-800">New User Approvals</p>
                    <a href="{{ route('admin.users.pending') }}" class="text-xs font-bold text-pink-600 mt-2 inline-block hover:underline">Review Now &rarr;</a>
                </div>

                <div class="p-4 bg-blue-50/30 rounded-2xl border border-blue-100/50">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-blue-100 text-blue-600 rounded text-[10px] font-bold uppercase">Programs</span>
                        <span class="text-xs text-gray-400 font-medium">12 Pending</span>
                    </div>
                    <p class="text-sm font-bold text-gray-800">Launchpad Applications</p>
                    <a href="{{ route('admin.programs.applications') }}" class="text-xs font-bold text-blue-600 mt-2 inline-block hover:underline">Review Now &rarr;</a>
                </div>

                <div class="p-4 bg-green-50/30 rounded-2xl border border-green-100/50">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-green-100 text-green-600 rounded text-[10px] font-bold uppercase">Finance</span>
                        <span class="text-xs text-gray-400 font-medium">5 Pending</span>
                    </div>
                    <p class="text-sm font-bold text-gray-800">Payout Requests</p>
                    <a href="{{ route('admin.finance.payments') }}" class="text-xs font-bold text-green-600 mt-2 inline-block hover:underline">Review Now &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

