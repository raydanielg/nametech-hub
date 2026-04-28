@extends('layouts.dashboard')

@section('dashboard-title', 'System Overview')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Quick Stats Grid (2 Rows of 5) -->
    @php
        $kpis = [
            [
                'label' => 'Total Users',
                'value' => number_format($stats['total_users'] ?? 0),
                'iconBg' => 'bg-emerald-50',
                'iconText' => 'text-emerald-600',
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
                'iconBg' => 'bg-emerald-50',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
            ],
            [
                'label' => 'Active Startups',
                'value' => number_format($stats['active_startups'] ?? 0),
                'iconBg' => 'bg-emerald-100',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
            ],
            [
                'label' => 'Active Courses',
                'value' => number_format($stats['active_courses'] ?? 0),
                'iconBg' => 'bg-emerald-50',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
            ],
            [
                'label' => 'Total Enrollments',
                'value' => number_format($stats['total_enrollments'] ?? 0),
                'iconBg' => 'bg-emerald-100',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />',
            ],
            [
                'label' => 'Certificates Issued',
                'value' => number_format($stats['certificates_issued'] ?? 0),
                'iconBg' => 'bg-emerald-50',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
            ],
            [
                'label' => 'Revenue Today',
                'value' => 'TZS ' . number_format((float) ($stats['revenue_today'] ?? 0), 2),
                'iconBg' => 'bg-emerald-100',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />',
            ],
            [
                'label' => 'Revenue (MTD)',
                'value' => 'TZS ' . number_format((float) ($stats['revenue_mtd'] ?? 0), 2),
                'iconBg' => 'bg-emerald-50',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z" />',
            ],
            [
                'label' => 'Open Tickets',
                'value' => number_format($stats['open_tickets'] ?? 0),
                'iconBg' => 'bg-emerald-100',
                'iconText' => 'text-emerald-600',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />',
            ],
        ];
    @endphp

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
        @foreach ($kpis as $kpi)
            <div class="bg-white/60 backdrop-blur-sm p-4 rounded-[1.5rem] border border-gray-100/50 shadow-sm hover:shadow-md hover:bg-white/70 transition-all duration-200 flex items-center space-x-4">
                <div class="w-12 h-12 {{ $kpi['iconBg'] }} rounded-2xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 {{ $kpi['iconText'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $kpi['icon'] !!}</svg>
                </div>
                <div class="min-w-0 flex-1">
                    <div class="text-xl font-bold text-gray-700 leading-none truncate">{{ $kpi['value'] }}</div>
                    <div class="text-[11px] text-gray-400 font-medium mt-1 truncate">{{ $kpi['label'] }}</div>
                </div>
            </div>
        @endforeach
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

    <div class="bg-white/70 backdrop-blur-md p-6 rounded-3xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-black text-gray-800">Recent Activity</h3>
            <div class="text-[10px] font-bold text-gray-400 uppercase" id="activity-updated-at">Updating…</div>
        </div>

        <div class="divide-y divide-gray-100" id="activity-feed">
            @forelse(($activity ?? []) as $item)
                <div class="py-3 flex items-start justify-between gap-4">
                    <div class="min-w-0">
                        <div class="text-sm font-bold text-gray-800 truncate">{{ $item['title'] ?? 'Activity' }}</div>
                        <div class="text-xs text-gray-500 truncate">{{ $item['description'] ?? '' }}</div>
                    </div>
                    <div class="shrink-0 text-[11px] font-medium text-gray-400">{{ $item['time'] ?? '' }}</div>
                </div>
            @empty
                <div class="py-10 text-center text-sm text-gray-400 font-medium">No activity yet</div>
            @endforelse
        </div>
    </div>
</div>

<script>
    (function () {
        const feed = document.getElementById('activity-feed');
        const updatedAt = document.getElementById('activity-updated-at');

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

