@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100 font-sans">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-xl hidden md:flex flex-col border-r border-gray-200">
        <div class="p-6 flex items-center justify-between border-b border-gray-100">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-pink-600 rounded-lg flex items-center justify-center text-white font-bold">N</div>
                <span class="text-xl font-bold text-gray-800">NAMTECH</span>
            </div>
        </div>
        
        <nav class="flex-1 overflow-y-auto py-4 px-4 space-y-1">
            @include('dashboard.partials.sidebar-items')
        </nav>

        <div class="p-4 border-t border-gray-100">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center space-x-3 text-gray-500 hover:text-red-600 w-full transition duration-150">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    <span class="font-medium text-sm">Sign Out</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <header class="h-16 bg-white border-b border-gray-100 flex items-center justify-between px-8 z-10 shadow-sm">
            <div class="flex items-center space-x-4">
                <button class="md:hidden text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <h2 class="text-lg font-semibold text-gray-800">@yield('dashboard-title', 'Dashboard')</h2>
            </div>
            
            <div class="flex items-center space-x-6">
                <button class="text-gray-400 hover:text-pink-600 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 01-6 0v-1m6 0H9"></path></svg>
                    <span class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full bg-pink-500 border-2 border-white"></span>
                </button>
                
                <div class="flex items-center space-x-3 border-l pl-6 border-gray-100">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-400 font-medium">{{ auth()->user()->roles->first()->name ?? 'User' }}</p>
                    </div>
                    <div class="w-10 h-10 bg-gray-200 rounded-xl overflow-hidden shadow-inner flex items-center justify-center text-gray-400 font-bold border-2 border-pink-50">
                        @if(auth()->user()->profile_photo_url)
                            <img src="{{ auth()->user()->profile_photo_url }}" alt="Avatar" class="w-full h-full object-cover">
                        @else
                            {{ substr(auth()->user()->name, 0, 1) }}
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50/50 p-8">
            <div class="max-w-7xl mx-auto">
                @yield('dashboard-content')
            </div>
        </main>
    </div>
</div>

<style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: #d1d5db; }
    
    /* Animation */
    .fade-in { animation: fadeIn 0.4s ease-out; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
</style>
@endsection
