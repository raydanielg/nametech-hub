@extends('layouts.dashboard')

@section('dashboard-title', 'Overview')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Welcome Section -->
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col md:flex-row items-center justify-between relative overflow-hidden">
        <div class="relative z-10 space-y-2">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Karibu tena, <span class="text-emerald-600">{{ $user->first_name }}!</span></h1>
            <p class="text-gray-500 font-medium">Hapa ndipo unapoongoza na kufuatilia maendeleo ya {{ config('app.name') }}.</p>
            <div class="pt-4 flex items-center space-x-4">
                <span class="px-4 py-2 bg-emerald-50 text-emerald-600 rounded-full text-xs font-bold uppercase tracking-widest">{{ str_replace('_', ' ', $role) }}</span>
                <span class="text-gray-300">|</span>
                <span class="text-sm text-gray-400 font-medium">{{ now()->format('l, d M Y') }}</span>
            </div>
        </div>
        <div class="mt-6 md:mt-0 relative z-10">
            <button class="bg-emerald-600 text-white px-6 py-3 rounded-2xl font-bold shadow-lg shadow-emerald-200 hover:bg-emerald-700 transition transform hover:-translate-y-1">Quick Action</button>
        </div>
        <!-- Decorative elements -->
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-emerald-50 rounded-full opacity-50"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-emerald-50 rounded-full opacity-30"></div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <span class="text-green-500 text-xs font-bold bg-green-50 px-2 py-1 rounded-lg">+12%</span>
            </div>
            <p class="text-gray-400 text-sm font-bold uppercase tracking-wider">Total Users</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">1,240</h3>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="text-emerald-500 text-xs font-bold bg-emerald-50 px-2 py-1 rounded-lg">Active</span>
            </div>
            <p class="text-gray-400 text-sm font-bold uppercase tracking-wider">Active Startups</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">48</h3>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
                </div>
                <span class="text-green-500 text-xs font-bold bg-green-50 px-2 py-1 rounded-lg">TSh 0.00</span>
            </div>
            <p class="text-gray-400 text-sm font-bold uppercase tracking-wider">Monthly Revenue</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">0</h3>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <span class="text-gray-500 text-xs font-bold bg-gray-50 px-2 py-1 rounded-lg">Real-time</span>
            </div>
            <p class="text-gray-400 text-sm font-bold uppercase tracking-wider">Engagement Rate</p>
            <h3 class="text-2xl font-black text-gray-900 mt-1">84%</h3>
        </div>
    </div>

    <!-- Recent Activity & Chart placeholder -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-gray-900">Activity Overview</h3>
                <select class="bg-gray-50 border-0 text-sm font-bold text-gray-500 rounded-xl px-4 py-2">
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                </select>
            </div>
            <div class="h-64 bg-gray-50 rounded-3xl flex items-center justify-center border border-dashed border-gray-200">
                <span class="text-gray-400 font-medium">Activity Chart Visualization</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-8">Recent Notifications</h3>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 mt-2 rounded-full bg-emerald-500 shrink-0 shadow-lg shadow-emerald-200"></div>
                    <div>
                        <p class="text-sm font-bold text-gray-800">New Startup Application</p>
                        <p class="text-xs text-gray-400 mt-1">2 minutes ago • Launchpad Program</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 opacity-60">
                    <div class="w-2 h-2 mt-2 rounded-full bg-gray-300 shrink-0"></div>
                    <div>
                        <p class="text-sm font-bold text-gray-800">Payment Confirmed</p>
                        <p class="text-xs text-gray-400 mt-1">1 hour ago • Invoice #2304</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 opacity-60">
                    <div class="w-2 h-2 mt-2 rounded-full bg-gray-300 shrink-0"></div>
                    <div>
                        <p class="text-sm font-bold text-gray-800">System Backup Complete</p>
                        <p class="text-xs text-gray-400 mt-1">4 hours ago • Maintenance</p>
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-3 rounded-2xl text-sm font-bold text-emerald-600 bg-emerald-50 hover:bg-emerald-100 transition">View All Notifications</button>
        </div>
    </div>
</div>
@endsection
