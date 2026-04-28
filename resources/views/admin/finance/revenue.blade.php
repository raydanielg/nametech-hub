@extends('layouts.dashboard')

@section('dashboard-title', 'Revenue Reports')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Revenue Reports</h2>
            <p class="text-sm text-gray-500">Analyze financial performance and revenue trends.</p>
        </div>
        <div class="flex gap-3">
            <button onclick="exportReport('pdf')" class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span>Export PDF</span>
            </button>
            <button onclick="exportReport('excel')" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                <span>Export Excel</span>
            </button>
        </div>
    </div>

    <!-- Revenue Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Total Revenue</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$45,680</p>
                    <p class="text-xs text-emerald-600 mt-2">+12.5% from last month</p>
                </div>
                <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">This Month</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$12,450</p>
                    <p class="text-xs text-emerald-600 mt-2">+8.2% from last month</p>
                </div>
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Average Order</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$285</p>
                    <p class="text-xs text-red-600 mt-2">-3.1% from last month</p>
                </div>
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Conversion Rate</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">3.2%</p>
                    <p class="text-xs text-emerald-600 mt-2">+0.5% from last month</p>
                </div>
                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Chart -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-bold text-gray-900">Revenue Trend</h3>
            <div class="flex gap-2">
                <button onclick="changePeriod('week')" class="px-3 py-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">Week</button>
                <button onclick="changePeriod('month')" class="px-3 py-1.5 text-sm font-bold text-gray-900 bg-gray-100 rounded-lg">Month</button>
                <button onclick="changePeriod('year')" class="px-3 py-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">Year</button>
            </div>
        </div>
        
        <!-- Chart Placeholder -->
        <div class="h-64 bg-gray-50 rounded-xl flex items-center justify-center">
            <div class="text-center">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                <p class="text-gray-500 font-medium">Revenue Chart</p>
                <p class="text-sm text-gray-400 mt-1">Monthly revenue trends will appear here</p>
            </div>
        </div>
    </div>

    <!-- Revenue by Category -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Revenue by Category</h3>
            <div class="space-y-3">
                @php
                $categories = [
                    ['name' => 'Course Sales', 'amount' => 28500, 'percentage' => 62.4, 'color' => 'bg-emerald-500'],
                    ['name' => 'Consulting', 'amount' => 12400, 'percentage' => 27.1, 'color' => 'bg-blue-500'],
                    ['name' => 'Services', 'amount' => 3780, 'percentage' => 8.3, 'color' => 'bg-amber-500'],
                    ['name' => 'Other', 'amount' => 1000, 'percentage' => 2.2, 'color' => 'bg-gray-500'],
                ];
                @endphp
                @foreach($categories as $category)
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full {{ $category['color'] }}"></div>
                        <span class="text-sm font-medium text-gray-700">{{ $category['name'] }}</span>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-semibold text-gray-900">${{ number_format($category['amount']) }}</p>
                        <p class="text-xs text-gray-500">{{ $category['percentage'] }}%</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Top Customers</h3>
            <div class="space-y-3">
                @php
                $customers = [
                    ['name' => 'John Smith', 'amount' => 5850, 'orders' => 12],
                    ['name' => 'Sarah Johnson', 'amount' => 4200, 'orders' => 8],
                    ['name' => 'Mike Davis', 'amount' => 3150, 'orders' => 6],
                    ['name' => 'Anna Wilson', 'amount' => 2800, 'orders' => 5],
                    ['name' => 'David Brown', 'amount' => 2250, 'orders' => 4],
                ];
                @endphp
                @foreach($customers as $customer)
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-xs font-bold text-gray-600">
                            {{ substr($customer['name'], 0, 1) }}{{ substr(explode(' ', $customer['name'])[1] ?? '', 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">{{ $customer['name'] }}</p>
                            <p class="text-xs text-gray-500">{{ $customer['orders'] }} orders</p>
                        </div>
                    </div>
                    <div class="text-sm font-semibold text-gray-900">${{ number_format($customer['amount']) }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Monthly Revenue Table -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <h3 class="text-lg font-bold text-gray-900">Monthly Revenue Breakdown</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50 border-b border-gray-100">
                    <tr>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Month</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Revenue</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Orders</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Avg Order</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Growth</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php
                    $monthlyData = [
                        ['month' => 'Jan 2024', 'revenue' => 10500, 'orders' => 38, 'avg' => 276, 'growth' => '+12.5%'],
                        ['month' => 'Dec 2023', 'revenue' => 9800, 'orders' => 35, 'avg' => 280, 'growth' => '+8.2%'],
                        ['month' => 'Nov 2023', 'revenue' => 9200, 'orders' => 33, 'avg' => 279, 'growth' => '+5.1%'],
                        ['month' => 'Oct 2023', 'revenue' => 8750, 'orders' => 31, 'avg' => 282, 'growth' => '-2.3%'],
                        ['month' => 'Sep 2023', 'revenue' => 8950, 'orders' => 32, 'avg' => 280, 'growth' => '+3.7%'],
                    ];
                    @endphp
                    @foreach($monthlyData as $data)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="py-3 px-6 text-sm font-medium text-gray-900">{{ $data['month'] }}</td>
                        <td class="py-3 px-6 text-sm font-semibold text-gray-900">${{ number_format($data['revenue']) }}</td>
                        <td class="py-3 px-6 text-sm text-gray-600">{{ $data['orders'] }}</td>
                        <td class="py-3 px-6 text-sm text-gray-600">${{ $data['avg'] }}</td>
                        <td class="py-3 px-6">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                @if(strpos($data['growth'], '+') === 0) bg-emerald-100 text-emerald-800
                                @else bg-red-100 text-red-800
                                @endif">
                                {{ $data['growth'] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function changePeriod(period) {
    // Update chart based on period
    console.log('Changing period to:', period);
    // In a real implementation, this would update the chart data
}

function exportReport(format) {
    // Export report in specified format
    console.log('Exporting report as:', format);
    // In a real implementation, this would generate and download the report
    alert(`Exporting report as ${format.toUpperCase()}...`);
}
</script>
@endsection