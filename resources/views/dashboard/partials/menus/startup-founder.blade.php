<!-- Startups -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Growth</p>
    <div class="space-y-1">
        <a href="{{ route('founder.startup') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('founder.startup') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <span class="font-medium text-sm">My Startup</span>
        </a>
        <a href="{{ route('founder.milestones') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('founder.milestones') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium text-sm">Milestones</span>
        </a>
    </div>
</div>

<!-- Mentorship -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Support</p>
    <div class="space-y-1">
        <a href="{{ route('founder.mentor') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('founder.mentor') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            <span class="font-medium text-sm">My Mentor</span>
        </a>
        <a href="{{ route('founder.sessions') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('founder.sessions') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">Sessions</span>
        </a>
    </div>
</div>

<!-- Fundraising -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Network</p>
    <div class="space-y-1">
        <a href="{{ route('founder.investors') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('founder.investors') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Investors</span>
        </a>
    </div>
</div>
