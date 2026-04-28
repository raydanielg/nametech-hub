@extends('layouts.dashboard')

@section('dashboard-title', 'System Overview')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Quick Stats Grid (2 Rows of 5) -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
        <!-- ROW 1 -->
        <!-- Card 1 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-indigo-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-indigo-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">{{ number_format($stats['total_users']) }}</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Total Users</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-emerald-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-emerald-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">New Today</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-amber-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-amber-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Investors</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-purple-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-purple-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Active Deals</span>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-blue-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-blue-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">TZS 0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Wallet Balance</span>
            </div>
        </div>

        <!-- ROW 2 -->
        <!-- Card 6 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-orange-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-orange-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">TZS 0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Sales (MTD)</span>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-cyan-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-cyan-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">TZS 0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Payments (MTD)</span>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-indigo-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-indigo-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Active Employees</span>
            </div>
        </div>

        <!-- Card 9 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-rose-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-rose-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">TZS 0</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Monthly Payroll</span>
            </div>
        </div>

        <!-- Card 10 -->
        <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-green-100/50 rounded-2xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-green-500/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold text-gray-700 leading-none">{{ $stats['pending_tickets'] }}</span>
                <span class="text-[11px] text-gray-400 font-medium mt-1">Open Tickets</span>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Activity Trend Chart Container -->
        <div class="lg:col-span-2 bg-white/70 backdrop-blur-md p-6 rounded-3xl border border-gray-100 shadow-sm">
            <h3 class="text-sm font-black text-gray-800 mb-4">Activity Trend (Last 14 Days)</h3>
            <div class="h-64 flex items-end space-x-2 relative border-b border-gray-100">
                <!-- Simple SVG Chart Representation -->
                <svg class="w-full h-full" viewBox="0 0 400 100">
                    <path d="M0,80 Q50,20 100,60 T200,30 T300,70 T400,10" fill="none" stroke="#3b82f6" stroke-width="2" />
                    <circle cx="100" cy="60" r="3" fill="#3b82f6" />
                    <circle cx="200" cy="30" r="3" fill="#3b82f6" />
                    <circle cx="300" cy="70" r="3" fill="#3b82f6" />
                </svg>
                <!-- X-Axis Labels -->
                <div class="absolute -bottom-6 w-full flex justify-between px-2">
                    <span class="text-[8px] text-gray-400 font-bold uppercase">{{ now()->subDays(14)->format('Y-m-d') }}</span>
                    <span class="text-[8px] text-gray-400 font-bold uppercase">{{ now()->subDays(7)->format('Y-m-d') }}</span>
                    <span class="text-[8px] text-gray-400 font-bold uppercase">{{ now()->format('Y-m-d') }}</span>
                </div>
            </div>
            <!-- Legend -->
            <div class="mt-8 flex justify-center space-x-4">
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-1 bg-blue-500 rounded-full"></div>
                    <span class="text-[10px] text-gray-400 font-bold uppercase">Users</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-1 bg-green-500 rounded-full"></div>
                    <span class="text-[10px] text-gray-400 font-bold uppercase">Payments</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-1 bg-amber-500 rounded-full"></div>
                    <span class="text-[10px] text-gray-400 font-bold uppercase">Investor Txns</span>
                </div>
            </div>
        </div>

        <!-- Distribution Circle Container -->
        <div class="bg-white/70 backdrop-blur-md p-6 rounded-3xl border border-gray-100 shadow-sm flex flex-col items-center justify-between">
            <h3 class="text-sm font-black text-gray-800 self-start mb-4">Distribution</h3>
            <div class="relative w-48 h-48">
                <svg class="w-full h-full" viewBox="0 0 36 36">
                    <path class="text-gray-100" stroke-width="3" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                </svg>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-[10px] text-gray-400 font-bold uppercase">No data</span>
                </div>
            </div>
            <div class="mt-4 flex items-center space-x-2">
                <div class="w-3 h-3 bg-gray-200 rounded-sm"></div>
                <span class="text-[10px] text-gray-400 font-bold uppercase">No data</span>
            </div>
        </div>
    </div>

    <!-- Recent Tables Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white/70 backdrop-blur-md p-6 rounded-3xl border border-gray-100 shadow-sm">
            <h3 class="text-sm font-black text-gray-800 mb-6">Recent Payments</h3>
            <div class="flex flex-col items-center justify-center py-10 opacity-30">
                <svg class="w-12 h-12 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">No recent records</span>
            </div>
        </div>
        <div class="bg-white/70 backdrop-blur-md p-6 rounded-3xl border border-gray-100 shadow-sm">
            <h3 class="text-sm font-black text-gray-800 mb-6">Recent Investor Transactions</h3>
            <div class="flex flex-col items-center justify-center py-10 opacity-30">
                <svg class="w-12 h-12 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">No recent records</span>
            </div>
        </div>
    </div>
</div>
@endsection

