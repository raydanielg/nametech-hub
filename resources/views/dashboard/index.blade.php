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
        <!-- Removed Quick Action button as per user request -->
        <!-- Decorative elements -->
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-emerald-50 rounded-full opacity-50"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-emerald-50 rounded-full opacity-30"></div>
    </div>

    <!-- Simple KPI Row (Horizontal Flex) -->
    <div class="flex flex-wrap lg:flex-nowrap gap-4 mb-8">
        @php
            $kpis = [
                [
                    'label' => 'Total Users',
                    'value' => '1,240',
                    'iconBg' => 'bg-blue-100',
                    'iconText' => 'text-blue-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />',
                ],
                [
                    'label' => 'Active Startups',
                    'value' => '48',
                    'iconBg' => 'bg-emerald-100',
                    'iconText' => 'text-emerald-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                ],
                [
                    'label' => 'Monthly Revenue',
                    'value' => 'TSh 0.00',
                    'iconBg' => 'bg-amber-100',
                    'iconText' => 'text-amber-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z" />',
                ],
                [
                    'label' => 'Engagement Rate',
                    'value' => '84%',
                    'iconBg' => 'bg-purple-100',
                    'iconText' => 'text-purple-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />',
                ],
            ];
        @endphp

        @foreach ($kpis as $kpi)
            <div class="bg-[#E9E9EB] p-4 rounded-[1.25rem] shadow-sm hover:shadow-md transition-all duration-300 group border border-transparent hover:border-white flex-1 min-w-[180px]">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 {{ $kpi['iconBg'] }} rounded-lg flex items-center justify-center shrink-0 shadow-sm">
                        <svg class="w-5 h-5 {{ $kpi['iconText'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $kpi['icon'] !!}</svg>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h4 class="text-base font-bold text-gray-900 leading-tight truncate">{{ $kpi['value'] }}</h4>
                        <p class="text-[9px] font-medium text-gray-500 truncate mt-0.5">{{ $kpi['label'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
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
