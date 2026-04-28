<!-- Deal Flow -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Deal Flow</p>
    <div class="space-y-1">
        <a href="{{ route('investor.pipeline') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('investor.pipeline') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <span class="font-medium text-sm">Startup Pipeline</span>
        </a>
    </div>
</div>

<!-- My Investments -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Portfolio</p>
    <div class="space-y-1">
        <a href="{{ route('investor.portfolio') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('investor.portfolio') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            <span class="font-medium text-sm">My Portfolio</span>
        </a>
    </div>
</div>
