@extends('layouts.dashboard')

@section('dashboard-title', 'Studio Director Dashboard')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Studio Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mb-1">Active Projects</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['active_projects'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mb-1">Total Clients</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total_clients'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mb-1">Team Members</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['team_members'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mb-1">Overdue Tasks</p>
            <h3 class="text-2xl font-black text-pink-600">{{ $stats['overdue_tasks'] }}</h3>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Project Timeline -->
        <div class="lg:col-span-2 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Active Project Status</h3>
            <div class="space-y-6">
                @foreach(['Fintech App' => 85, 'Health Portal' => 40, 'E-commerce Redesign' => 60] as $project => $progress)
                <div class="p-4 bg-gray-50 rounded-2xl">
                    <div class="flex justify-between items-center mb-3">
                        <span class="font-bold text-gray-800">{{ $project }}</span>
                        <span class="text-xs font-black text-pink-600">{{ $progress }}%</span>
                    </div>
                    <div class="w-full bg-white rounded-full h-1.5 border border-gray-100">
                        <div class="bg-pink-600 h-1.5 rounded-full" style="width: {{ $progress }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Recent Invoices -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-xl font-black text-gray-900 mb-6">Latest Invoices</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 border-b border-gray-50">
                    <div>
                        <p class="text-sm font-bold text-gray-800">INV-0012</p>
                        <p class="text-[10px] text-gray-400">TechNova Solutions</p>
                    </div>
                    <span class="text-sm font-black text-gray-900">TSh 4.5M</span>
                </div>
                <div class="flex items-center justify-between p-3 border-b border-gray-50">
                    <div>
                        <p class="text-sm font-bold text-gray-800">INV-0011</p>
                        <p class="text-[10px] text-gray-400">GreenLeaf Inc</p>
                    </div>
                    <span class="text-sm font-black text-gray-900">TSh 2.8M</span>
                </div>
            </div>
            <button class="w-full mt-6 py-3 rounded-2xl text-xs font-bold text-gray-400 bg-gray-50 hover:bg-gray-100 transition">View All Invoices</button>
        </div>
    </div>
</div>
@endsection
