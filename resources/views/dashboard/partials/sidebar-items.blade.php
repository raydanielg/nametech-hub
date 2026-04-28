@php
    $role = auth()->user()->roles->first()->name ?? 'guest';
@endphp

<!-- Common Section -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Main</p>
    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 p-2 rounded-xl transition duration-150 {{ request()->routeIs('dashboard') ? 'bg-pink-600 text-white shadow-lg shadow-pink-200' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        <span class="font-semibold text-sm">Dashboard</span>
    </a>
</div>

@if($role === 'super_admin')
    <!-- Super Admin Sidebar -->
    @include('dashboard.partials.menus.super-admin')
@elseif($role === 'hub_director')
    @include('dashboard.partials.menus.hub-director')
@elseif($role === 'studio_director')
    @include('dashboard.partials.menus.studio-director')
@elseif($role === 'programs_manager')
    @include('dashboard.partials.menus.programs-manager')
@elseif($role === 'project_manager')
    @include('dashboard.partials.menus.project-manager')
@elseif($role === 'mentor')
    @include('dashboard.partials.menus.mentor')
@elseif($role === 'investor')
    @include('dashboard.partials.menus.investor')
@elseif($role === 'startup_founder')
    @include('dashboard.partials.menus.startup-founder')
@elseif($role === 'developer')
    @include('dashboard.partials.menus.developer')
@elseif($role === 'designer')
    @include('dashboard.partials.menus.designer')
@elseif($role === 'student')
    @include('dashboard.partials.menus.student')
@elseif($role === 'client')
    @include('dashboard.partials.menus.client')
@elseif($role === 'alumni')
    @include('dashboard.partials.menus.alumni')
@endif
