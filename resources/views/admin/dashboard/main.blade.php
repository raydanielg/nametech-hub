@extends('layouts.dashboard')

@section('dashboard-title', 'Admin Overview')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <div class="flex flex-col items-end">
                    <span class="text-green-500 text-xs font-bold bg-green-50 px-2 py-1 rounded-lg">+5.2%</span>
                </div>
            </div>
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">Watumiaji Jumla</p>
            <h3 class="text-3xl font-black text-gray-900 mt-1">{{ number_format($stats['total_users']) }}</h3>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-pink-50 text-pink-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div class="flex flex-col items-end">
                    <span class="text-pink-500 text-xs font-bold bg-pink-50 px-2 py-1 rounded-lg">Mpya 12</span>
                </div>
            </div>
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">Startups Hai</p>
            <h3 class="text-3xl font-black text-gray-900 mt-1">{{ number_format($stats['active_startups']) }}</h3>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
                </div>
                <div class="flex flex-col items-end">
                    <span class="text-emerald-500 text-xs font-bold bg-emerald-50 px-2 py-1 rounded-lg">Mwezi Huu</span>
                </div>
            </div>
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">Mapato (TZS)</p>
            <h3 class="text-3xl font-black text-gray-900 mt-1">{{ number_format($stats['total_revenue'] / 1000000, 1) }}M</h3>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <div class="flex flex-col items-end">
                    <span class="text-amber-500 text-xs font-bold bg-amber-50 px-2 py-1 rounded-lg">{{ $stats['pending_tickets'] }} Tiketi</span>
                </div>
            </div>
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">Msaada (Tickets)</p>
            <h3 class="text-3xl font-black text-gray-900 mt-1">{{ $stats['pending_tickets'] > 0 ? 'Inahitaji Hatua' : 'Safi' }}</h3>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Activity -->
        <div class="lg:col-span-2 bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-black text-gray-900">Shughuli za Mfumo</h3>
                    <p class="text-sm text-gray-400 font-medium">Muhtasari wa hivi karibuni</p>
                </div>
                <button class="px-4 py-2 bg-gray-50 text-gray-600 rounded-xl text-xs font-bold hover:bg-gray-100 transition-colors">View All</button>
            </div>
            <div class="space-y-4">
                @php
                    $activities = [
                        ['label' => 'Usajili Mpya', 'user' => 'John Doe', 'time' => 'Dk 5 zilizopita', 'icon' => 'user', 'color' => 'indigo'],
                        ['label' => 'Malipo Mapya', 'user' => 'Sarah J.', 'time' => 'Dk 12 zilizopita', 'icon' => 'credit-card', 'color' => 'emerald'],
                        ['label' => 'Ombi la Startup', 'user' => 'TechNova', 'time' => 'Saa 1 iliyopita', 'icon' => 'rocket', 'color' => 'pink'],
                        ['label' => 'Tiketi Mpya', 'user' => 'Amos K.', 'time' => 'Saa 2 zilizopita', 'icon' => 'support', 'color' => 'amber'],
                    ];
                @endphp
                @foreach($activities as $item)
                <div class="group flex items-center justify-between p-4 hover:bg-gray-50 rounded-2xl transition-all duration-200 border border-transparent hover:border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-{{ $item['color'] }}-50 text-{{ $item['color'] }}-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            @if($item['icon'] == 'user')
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            @elseif($item['icon'] == 'credit-card')
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                            @elseif($item['icon'] == 'rocket')
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            @else
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            @endif
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-800">{{ $item['label'] }}</p>
                            <p class="text-xs text-gray-400 font-medium">{{ $item['user'] }} • {{ $item['time'] }}</p>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-gray-300 group-hover:text-gray-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
                @endforeach
            </div>
        </div>

        <!-- System Shortcuts/Pending -->
        <div class="space-y-6">
            <div class="bg-gray-900 p-8 rounded-[2.5rem] shadow-xl relative overflow-hidden group">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-pink-500/20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-500"></div>
                <h3 class="text-xl font-black text-white mb-2 relative z-10">Admin Quick Access</h3>
                <p class="text-gray-400 text-xs mb-8 relative z-10">Simamia mifumo muhimu kwa haraka</p>
                
                <div class="grid grid-cols-2 gap-4 relative z-10">
                    <a href="{{ route('admin.users.index') }}" class="p-4 bg-white/5 hover:bg-white/10 rounded-2xl border border-white/10 transition-colors flex flex-col items-center text-center">
                        <div class="w-10 h-10 bg-indigo-500/20 text-indigo-400 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <span class="text-white text-xs font-bold">Watumiaji</span>
                    </a>
                    <a href="{{ route('admin.finance.invoices') }}" class="p-4 bg-white/5 hover:bg-white/10 rounded-2xl border border-white/10 transition-colors flex flex-col items-center text-center">
                        <div class="w-10 h-10 bg-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
                        </div>
                        <span class="text-white text-xs font-bold">Fedha</span>
                    </a>
                    <a href="{{ route('admin.support.index') }}" class="p-4 bg-white/5 hover:bg-white/10 rounded-2xl border border-white/10 transition-colors flex flex-col items-center text-center">
                        <div class="w-10 h-10 bg-amber-500/20 text-amber-400 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <span class="text-white text-xs font-bold">Msaada</span>
                    </a>
                    <a href="{{ route('admin.system.settings') }}" class="p-4 bg-white/5 hover:bg-white/10 rounded-2xl border border-white/10 transition-colors flex flex-col items-center text-center">
                        <div class="w-10 h-10 bg-pink-500/20 text-pink-400 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <span class="text-white text-xs font-bold">Settings</span>
                    </a>
                </div>
            </div>

            <!-- Health Monitor -->
            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
                <h3 class="text-lg font-black text-gray-900 mb-6">System Health</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">Server CPU</span>
                        <span class="text-xs font-black text-emerald-500">12%</span>
                    </div>
                    <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-emerald-500 h-full rounded-full" style="width: 12%"></div>
                    </div>
                    
                    <div class="flex items-center justify-between mt-6">
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">Storage</span>
                        <span class="text-xs font-black text-amber-500">64%</span>
                    </div>
                    <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-amber-500 h-full rounded-full" style="width: 64%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

