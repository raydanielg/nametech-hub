@extends('layouts.dashboard')

@section('dashboard-title', 'Main Admin Dashboard')

@section('dashboard-content')
<div class="space-y-6">
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
        <h1 class="text-2xl font-black text-gray-900">Admin Overview</h1>
        <p class="text-gray-500 mt-2">Welcome to the super admin control center. You have full access to manage all aspects of NAMTECH-HUB.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-pink-600 to-pink-500 p-6 rounded-3xl text-white shadow-lg">
            <p class="text-pink-100 text-sm font-bold uppercase tracking-wider">Active Programs</p>
            <h3 class="text-3xl font-black mt-1">12</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-sm font-bold uppercase tracking-wider">Total Revenue</p>
            <h3 class="text-3xl font-black mt-1 text-gray-900">TSh 45.2M</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-sm font-bold uppercase tracking-wider">Pending Tasks</p>
            <h3 class="text-3xl font-black mt-1 text-gray-900">8</h3>
        </div>
    </div>
</div>
@endsection
