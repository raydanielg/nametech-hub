@extends('layouts.dashboard')

@section('dashboard-title', 'Overview')

@push('styles')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Welcome Section -->
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col md:flex-row items-center justify-between relative overflow-hidden">
        <div class="relative z-10 space-y-2">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Welcome back, <span class="text-emerald-600">{{ $user->first_name }}!</span></h1>
            <p class="text-gray-500 font-medium">Manage and track your progress across {{ config('app.name') }} in one place.</p>
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
            $kpiData = [
                [
                    'label' => 'Total Users',
                    'value' => number_format($stats['total_users'] ?? 1240),
                    'iconBg' => 'bg-blue-100',
                    'iconText' => 'text-blue-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />',
                ],
                [
                    'label' => 'Active Startups',
                    'value' => number_format($stats['active_startups'] ?? 48),
                    'iconBg' => 'bg-emerald-100',
                    'iconText' => 'text-emerald-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                ],
                [
                    'label' => 'Monthly Revenue',
                    'value' => 'TSh ' . number_format($stats['monthly_revenue'] ?? 0),
                    'iconBg' => 'bg-amber-100',
                    'iconText' => 'text-amber-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z" />',
                ],
                [
                    'label' => 'Engagement Rate',
                    'value' => ($stats['engagement_rate'] ?? 84) . '%',
                    'iconBg' => 'bg-purple-100',
                    'iconText' => 'text-purple-600',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />',
                ],
            ];
        @endphp

        @foreach ($kpiData as $kpi)
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

    <!-- Activity & Notifications Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Activity Chart -->
        <div class="lg:col-span-2 bg-[#E9E9EB] p-8 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-gray-900">Activity Overview</h3>
                <select class="bg-white/50 border-0 text-sm font-bold text-gray-500 rounded-xl px-4 py-2 focus:ring-0">
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                </select>
            </div>
            <div id="mainDashboardChart" class="h-80"></div>
        </div>

        <!-- Recent Notifications -->
        <div class="bg-[#E9E9EB] p-8 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-gray-900">Recent Notifications</h3>
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            </div>
            
            <div class="space-y-6">
                @forelse($notifications ?? [] as $notification)
                    <div class="flex items-start space-x-4 group cursor-pointer">
                        <div class="w-10 h-10 bg-white/50 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-100 transition-colors">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 01-6 0v-1m6 0H9"></path></svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-bold text-gray-800 truncate group-hover:text-emerald-600 transition-colors">{{ $notification->data['title'] ?? 'System Update' }}</p>
                            <p class="text-xs text-gray-400 mt-1 truncate">{{ $notification->created_at->diffForHumans() }} • {{ $notification->data['type'] ?? 'General' }}</p>
                        </div>
                    </div>
                @empty
                    <!-- Sample Notifications for Visuals -->
                    <div class="flex items-start space-x-4 group cursor-pointer">
                        <div class="w-10 h-10 bg-white/50 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-100 transition-colors">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-bold text-gray-800 truncate group-hover:text-emerald-600 transition-colors">New Startup Application</p>
                            <p class="text-xs text-gray-400 mt-1">2 minutes ago • Launchpad Program</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 group cursor-pointer">
                        <div class="w-10 h-10 bg-white/50 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-100 transition-colors">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-bold text-gray-800 truncate group-hover:text-blue-600 transition-colors">Payment Confirmed</p>
                            <p class="text-xs text-gray-400 mt-1">1 hour ago • Invoice #2304</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 group cursor-pointer opacity-60">
                        <div class="w-10 h-10 bg-white/50 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-amber-100 transition-colors">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-bold text-gray-800 truncate group-hover:text-amber-600 transition-colors">System Maintenance</p>
                            <p class="text-xs text-gray-400 mt-1">4 hours ago • Maintenance</p>
                        </div>
                    </div>
                @endforelse
            </div>
            <button class="w-full mt-8 py-4 rounded-2xl text-xs font-black uppercase tracking-widest text-emerald-600 bg-white/50 hover:bg-emerald-50 transition-all border border-transparent hover:border-emerald-100">View All Notifications</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const options = {
            series: [{
                name: 'System Engagement',
                data: [31, 40, 28, 51, 42, 109, 100]
            }],
            chart: {
                height: 320,
                type: 'area',
                toolbar: { show: false },
                sparkline: { enabled: false },
                background: 'transparent',
                foreColor: '#64748b'
            },
            colors: ['#10b981'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.45,
                    opacityTo: 0.05,
                    stops: [20, 100, 100, 100]
                }
            },
            dataLabels: { enabled: false },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            xaxis: {
                categories: @json(collect(range(6, 0))->map(fn($i) => now()->subDays($i)->format('D'))->toArray()),
                axisBorder: { show: false },
                axisTicks: { show: false },
                labels: { style: { fontWeight: 600 } }
            },
            yaxis: { show: false },
            grid: {
                borderColor: '#cbd5e1',
                strokeDashArray: 4,
                padding: { left: 0, right: 0 }
            },
            tooltip: {
                theme: 'light',
                x: { show: true },
                y: { title: { formatter: (val) => val } }
            }
        };

        const chart = new ApexCharts(document.querySelector("#mainDashboardChart"), options);
        chart.render();
    });
</script>
@endsection
