@extends('layouts.dashboard')

@section('dashboard-title', 'Expenses')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Expenses</h2>
            <p class="text-sm text-gray-500">Track and manage business expenses.</p>
        </div>
        <a href="{{ route('finance.expenses.add') }}" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Add Expense</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Total Expenses</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$12,450</p>
                </div>
                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">This Month</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$3,280</p>
                </div>
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Pending</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$850</p>
                </div>
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Categories</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">8</p>
                </div>
                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Expenses Table -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h3 class="text-lg font-bold text-gray-900">Recent Expenses</h3>
                <div class="flex gap-3">
                    <div class="relative">
                        <input type="text" placeholder="Search expenses..." class="pl-10 pr-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all w-64">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <select class="px-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-emerald-500">
                        <option>All Categories</option>
                        <option>Office Supplies</option>
                        <option>Software</option>
                        <option>Marketing</option>
                        <option>Travel</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50 border-b border-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Date</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Description</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Category</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Amount</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-right py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php
                    $expenses = [
                        ['date' => '2024-01-15', 'description' => 'Office Rent', 'category' => 'Office', 'amount' => 2500, 'status' => 'approved'],
                        ['date' => '2024-01-14', 'description' => 'Software License', 'category' => 'Software', 'amount' => 299, 'status' => 'pending'],
                        ['date' => '2024-01-13', 'description' => 'Marketing Campaign', 'category' => 'Marketing', 'amount' => 850, 'status' => 'approved'],
                        ['date' => '2024-01-12', 'description' => 'Travel Expenses', 'category' => 'Travel', 'amount' => 450, 'status' => 'approved'],
                        ['date' => '2024-01-11', 'description' => 'Office Supplies', 'category' => 'Office', 'amount' => 120, 'status' => 'pending'],
                    ];
                    @endphp
                    @foreach($expenses as $expense)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="py-4 px-6">
                            <span class="text-sm font-medium text-gray-900">{{ \Carbon\Carbon::parse($expense['date'])->format('M d, Y') }}</span>
                        </td>
                        <td class="py-4 px-6">
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $expense['description'] }}</p>
                                <p class="text-xs text-gray-500">ID: #EXP-{{ rand(1000, 9999) }}</p>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $expense['category'] }}
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="text-sm font-bold text-gray-900">${{ number_format($expense['amount'], 2) }}</span>
                        </td>
                        <td class="py-4 px-6">
                            @if($expense['status'] === 'approved')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    Approved
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    Pending
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors" title="Edit Expense">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="View Receipt">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Expense">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-6 border-t border-gray-100 flex items-center justify-between">
            <p class="text-sm text-gray-500">Showing <span class="font-medium text-gray-900">1-5</span> of <span class="font-medium text-gray-900">24</span> expenses</p>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">Previous</button>
                <button class="px-3 py-1.5 text-sm font-bold text-gray-900 bg-gray-100 rounded-lg">1</button>
                <button class="px-3 py-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">2</button>
                <button class="px-3 py-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">3</button>
                <button class="px-3 py-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection