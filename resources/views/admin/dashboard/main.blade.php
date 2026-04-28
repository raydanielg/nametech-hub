@extends('layouts.dashboard')

@section('dashboard-title', 'System Overview')

@push('styles')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Quick Stats Grid (2 Rows of 5) -->
    @php
        $kpis = [
            [
                'label' => 'Total Users',
                'value' => number_format($stats['total_users'] ?? 0),
                'iconBg' => 'bg-blue-100',
                'iconText' => 'text-blue-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />',
            ],
            [
                'label' => 'New Users Today',
                'value' => number_format($stats['new_users_today'] ?? 0),
                'iconBg' => 'bg-emerald-100',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />',
            ],
            [
                'label' => 'Total Startups',
                'value' => number_format($stats['total_startups'] ?? 0),
                'iconBg' => 'bg-amber-100',
                'iconText' => 'text-amber-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
            ],
            [
                'label' => 'Active Startups',
                'value' => number_format($stats['active_startups'] ?? 0),
                'iconBg' => 'bg-purple-100',
                'iconText' => 'text-purple-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
            ],
            [
                'label' => 'Active Courses',
                'value' => number_format($stats['active_courses'] ?? 0),
                'iconBg' => 'bg-cyan-100',
                'iconText' => 'text-cyan-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
            ],
            [
                'label' => 'Total Enrollments',
                'value' => number_format($stats['total_enrollments'] ?? 0),
                'iconBg' => 'bg-rose-100',
                'iconText' => 'text-rose-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />',
            ],
            [
                'label' => 'Certificates Issued',
                'value' => number_format($stats['certificates_issued'] ?? 0),
                'iconBg' => 'bg-indigo-100',
                'iconText' => 'text-indigo-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
            ],
            [
                'label' => 'Revenue Today',
                'value' => 'TZS ' . number_format((float) ($stats['revenue_today'] ?? 0), 2),
                'iconBg' => 'bg-teal-100',
                'iconText' => 'text-teal-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />',
            ],
            [
                'label' => 'Revenue (MTD)',
                'value' => 'TZS ' . number_format((float) ($stats['revenue_mtd'] ?? 0), 2),
                'iconBg' => 'bg-orange-100',
                'iconText' => 'text-orange-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z" />',
            ],
            [
                'label' => 'Open Tickets',
                'value' => number_format($stats['open_tickets'] ?? 0),
                'iconBg' => 'bg-pink-100',
                'iconText' => 'text-pink-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />',
            ],
        ];
    @endphp

    <!-- Simple KPI Row (Horizontal Flex) -->
    <div class="flex flex-wrap lg:flex-nowrap gap-4 mb-8">
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

    <!-- Charts & Activity Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Activity Trend Chart -->
        <div class="lg:col-span-2 bg-[#E9E9EB] p-6 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300">
            <h3 class="text-base font-bold text-gray-800 mb-6">Activity Trend (Last 14 Days)</h3>
            <div id="activityChart" class="h-64"></div>
        </div>

        <!-- Distribution Circle -->
        <div class="bg-[#E9E9EB] p-6 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300 flex flex-col items-center">
            <h3 class="text-base font-bold text-gray-800 self-start mb-6">Distribution</h3>
            <div id="distributionChart" class="w-full h-64"></div>
        </div>
    </div>

    <!-- Bottom Tables Row 1 (Payments & Investor Txns) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 pb-6">
        <!-- Recent Payments -->
        <div class="bg-[#E9E9EB] p-6 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300 min-h-[300px]">
            <h3 class="text-base font-bold text-gray-800 mb-6">Recent Payments</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-300/50">
                            <th class="pb-4">Date</th>
                            <th class="pb-4">Ref</th>
                            <th class="pb-4">Description</th>
                            <th class="pb-4 text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="py-20 text-center text-xs font-bold text-gray-400">No payments.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Investor Transactions -->
        <div class="bg-[#E9E9EB] p-6 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300 min-h-[300px]">
            <h3 class="text-base font-bold text-gray-800 mb-6">Recent Investor Transactions</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-300/50">
                            <th class="pb-4">Date</th>
                            <th class="pb-4">Investor</th>
                            <th class="pb-4">Type</th>
                            <th class="pb-4 text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="py-20 text-center text-xs font-bold text-gray-400">No transactions.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bottom Tables Row 2 (CRM Inbox & Recent Logins) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 pb-8">
        <!-- CRM Inbox (Latest) -->
        <div class="bg-[#E9E9EB] p-6 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300 min-h-[300px]">
            <h3 class="text-base font-bold text-gray-800 mb-6">CRM Inbox (Latest)</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-300/50">
                            <th class="pb-4">Subject</th>
                            <th class="pb-4">Status</th>
                            <th class="pb-4">Assignee</th>
                            <th class="pb-4">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="py-20 text-center text-xs font-bold text-gray-400">No inbox messages.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Logins -->
        <div class="bg-[#E9E9EB] p-6 rounded-[2rem] shadow-sm border border-transparent hover:border-white transition-all duration-300 min-h-[300px]">
            <h3 class="text-base font-bold text-gray-800 mb-6">Recent Logins</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-300/50">
                            <th class="pb-4">User</th>
                            <th class="pb-4">IP</th>
                            <th class="pb-4">When</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200/50">
                        @forelse($recentLogins ?? [] as $login)
                            <tr class="text-sm">
                                <td class="py-4 font-bold text-gray-700">{{ $login->user->name ?? 'Namtech Admin' }}</td>
                                <td class="py-4 text-gray-500 font-mono text-xs">{{ $login->ip_address ?? '197.186.45.168' }}</td>
                                <td class="py-4 text-gray-500 font-medium">{{ $login->created_at->diffForHumans() ?? '1 hour ago' }}</td>
                            </tr>
                        @empty
                            <!-- Sample Data if no real data yet -->
                            <tr class="text-sm">
                                <td class="py-4 font-bold text-gray-700">Namtech Admin</td>
                                <td class="py-4 text-gray-500 font-mono text-xs">197.186.45.168</td>
                                <td class="py-4 text-gray-500 font-medium">1 hour ago</td>
                            </tr>
                            <tr class="text-sm border-t border-gray-200/50">
                                <td class="py-4 font-bold text-gray-700">Namtech Admin</td>
                                <td class="py-4 text-gray-500 font-mono text-xs">197.186.45.168</td>
                                <td class="py-4 text-gray-500 font-medium">3 hours ago</td>
                            </tr>
                            <tr class="text-sm border-t border-gray-200/50">
                                <td class="py-4 font-bold text-gray-700">Namtech Admin</td>
                                <td class="py-4 text-gray-500 font-mono text-xs">102.64.68.149</td>
                                <td class="py-4 text-gray-500 font-medium">15 hours ago</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Activity Chart
        // Activity Chart with Mock Data for Visualization
        const activityOptions = {
            series: [{
                name: 'Users',
                data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10, 4, 1]
            }, {
                name: 'Engagement',
                data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35, 24, 21]
            }],
            chart: {
                height: 280,
                type: 'area',
                toolbar: { show: false },
                background: 'transparent',
                foreColor: '#64748b'
            },
            colors: ['#3b82f6', '#10b981'],
            dataLabels: { enabled: false },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                categories: @json(collect(range(13, 0))->map(fn($i) => now()->subDays($i)->format('d M'))->toArray()),
                labels: {
                    style: { fontSize: '10px', fontWeight: 600 }
                },
                axisBorder: { show: false },
                axisTicks: { show: false }
            },
            yaxis: {
                labels: {
                    style: { fontSize: '10px', fontWeight: 600 }
                }
            },
            grid: {
                borderColor: '#cbd5e1',
                strokeDashArray: 4,
                xaxis: { lines: { show: true } },
                yaxis: { lines: { show: true } }
            },
            legend: {
                position: 'bottom',
                fontSize: '10px',
                fontWeight: 600,
                markers: { radius: 12 }
            }
        };

        const activityChart = new ApexCharts(document.querySelector("#activityChart"), activityOptions);
        activityChart.render();

        // Distribution Chart with Mock Data
        const distributionOptions = {
            series: [450, 240, 180, 130],
            chart: {
                type: 'donut',
                height: 300,
                background: 'transparent'
            },
            labels: ['Users', 'Startups', 'Courses', 'Tickets'],
            colors: ['#3b82f6', '#10b981', '#f59e0b', '#a855f7'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '75%',
                        labels: {
                            show: true,
                            name: { show: true, color: '#64748b' },
                            value: { show: true, fontSize: '20px', fontWeight: 900, color: '#1e293b' },
                            total: {
                                show: true,
                                label: 'Total',
                                color: '#64748b',
                                formatter: function (w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0)
                                }
                            }
                        }
                    }
                }
            },
            legend: { 
                position: 'bottom',
                labels: { colors: '#64748b' }
            },
            dataLabels: { enabled: false }
        };

        const distributionChart = new ApexCharts(document.querySelector("#distributionChart"), distributionOptions);
        distributionChart.render();
    });

    (function () {
        const feed = document.getElementById('activity-feed');
        const updatedAt = document.getElementById('activity-updated-at');
        // ... (rest of the activity refresh script)

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.innerText = text ?? '';
            return div.innerHTML;
        }

        async function refreshActivity() {
            try {
                const res = await fetch("{{ route('admin.dashboard.activity') }}", {
                    headers: { 'Accept': 'application/json' },
                    credentials: 'same-origin'
                });

                if (!res.ok) return;
                const data = await res.json();

                const items = data.activity || [];
                if (!feed) return;

                if (!items.length) {
                    feed.innerHTML = '<div class="py-10 text-center text-sm text-gray-400 font-medium">No activity yet</div>';
                } else {
                    feed.innerHTML = items.map((item) => {
                        const title = escapeHtml(item.title || 'Activity');
                        const desc = escapeHtml(item.description || '');
                        const time = escapeHtml(item.time || '');
                        return `
                            <div class="py-3 flex items-start justify-between gap-4">
                                <div class="min-w-0">
                                    <div class="text-sm font-bold text-gray-800 truncate">${title}</div>
                                    <div class="text-xs text-gray-500 truncate">${desc}</div>
                                </div>
                                <div class="shrink-0 text-[11px] font-medium text-gray-400">${time}</div>
                            </div>
                        `;
                    }).join('');
                }

                if (updatedAt && data.generated_at) {
                    updatedAt.textContent = new Date(data.generated_at).toLocaleTimeString();
                }
            } catch (e) {
                // ignore
            }
        }

        refreshActivity();
        setInterval(refreshActivity, 15000);
    })();
</script>
@endsection

