<!-- Dashboard -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Dashboard</p>
    <div class="space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            <span class="font-medium text-sm">Main Dashboard</span>
        </a>
        <a href="{{ route('admin.dashboard.stats') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.dashboard.stats') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            <span class="font-medium text-sm">Real-time Stats</span>
        </a>
        <a href="{{ route('admin.dashboard.health') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.dashboard.health') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            <span class="font-medium text-sm">System Health</span>
        </a>
    </div>
</div>

<!-- User Management -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">User Management</p>
    <div class="space-y-1">
        <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.users.index') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <span class="font-medium text-sm">All Users</span>
        </a>
        <a href="{{ route('admin.users.add') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.users.add') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            <span class="font-medium text-sm">Add New User</span>
        </a>
        <a href="{{ route('admin.users.roles') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.users.roles') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            <span class="font-medium text-sm">Roles & Permissions</span>
        </a>
        <a href="{{ route('admin.users.pending') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.users.pending') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium text-sm">Pending Approvals</span>
        </a>
        <a href="{{ route('admin.users.deleted') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.users.deleted') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            <span class="font-medium text-sm">Deleted Users</span>
        </a>
    </div>
</div>

<!-- Hub Management -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Hub Management</p>
    <div class="space-y-1">
        <a href="{{ route('admin.hub.memberships') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.hub.memberships') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <span class="font-medium text-sm">Memberships</span>
        </a>
        <a href="{{ route('admin.hub.members') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.hub.members') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Members List</span>
        </a>
        <a href="{{ route('admin.hub.coworking') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.hub.coworking') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            <span class="font-medium text-sm">Coworking Spaces</span>
        </a>
        <a href="{{ route('admin.hub.meeting-rooms') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.hub.meeting-rooms') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <span class="font-medium text-sm">Meeting Rooms</span>
        </a>
        <a href="{{ route('admin.hub.settings') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.hub.settings') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
            <span class="font-medium text-sm">Hub Settings</span>
        </a>
    </div>
</div>

<!-- Programs -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Programs</p>
    <div class="space-y-1">
        <a href="{{ route('admin.programs.launchpad') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.programs.launchpad') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            <span class="font-medium text-sm">Launchpad (Incubation)</span>
        </a>
        <a href="{{ route('admin.programs.scale') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.programs.scale') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path></svg>
            <span class="font-medium text-sm">Scale (Acceleration)</span>
        </a>
        <a href="{{ route('admin.programs.applications') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.programs.applications') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium text-sm">Applications</span>
        </a>
        <a href="{{ route('admin.programs.cohorts') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.programs.cohorts') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Cohorts</span>
        </a>
        <a href="{{ route('admin.programs.milestones') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.programs.milestones') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            <span class="font-medium text-sm">Milestones</span>
        </a>
        <a href="{{ route('admin.programs.demo-day') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.programs.demo-day') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">Demo Day Manager</span>
        </a>
    </div>
</div>

<!-- Studio Management -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Studio Management</p>
    <div class="space-y-1">
        <a href="{{ route('admin.studio.projects') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.studio.projects') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            <span class="font-medium text-sm">All Projects</span>
        </a>
        <a href="{{ route('admin.studio.clients') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.studio.clients') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <span class="font-medium text-sm">Clients</span>
        </a>
        <a href="{{ route('admin.studio.developers') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.studio.developers') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
            <span class="font-medium text-sm">Developers</span>
        </a>
        <a href="{{ route('admin.studio.repos') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.studio.repos') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">Code Repositories</span>
        </a>
        <a href="{{ route('admin.studio.settings') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.studio.settings') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
            <span class="font-medium text-sm">Studio Settings</span>
        </a>
    </div>
</div>

<!-- Academy -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Academy</p>
    <div class="space-y-1">
        <a href="{{ route('admin.academy.courses') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.academy.courses') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"></path></svg>
            <span class="font-medium text-sm">All Courses</span>
        </a>
        <a href="{{ route('admin.academy.courses.add') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.academy.courses.add') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            <span class="font-medium text-sm">Add Course</span>
        </a>
        <a href="{{ route('admin.academy.students') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.academy.students') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <span class="font-medium text-sm">Students</span>
        </a>
        <a href="{{ route('admin.academy.enrollments') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.academy.enrollments') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            <span class="font-medium text-sm">Enrollments</span>
        </a>
        <a href="{{ route('admin.academy.certificates') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.academy.certificates') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            <span class="font-medium text-sm">Certificates</span>
        </a>
        <a href="{{ route('admin.academy.settings') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.academy.settings') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
            <span class="font-medium text-sm">Academy Settings</span>
        </a>
    </div>
</div>

<!-- Finance -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Finance</p>
    <div class="space-y-1">
        <a href="{{ route('admin.finance.invoices') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.finance.invoices') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">All Invoices</span>
        </a>
        <a href="{{ route('admin.finance.payments') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.finance.payments') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
            <span class="font-medium text-sm">Payments</span>
        </a>
        <a href="{{ route('admin.finance.revenue') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.finance.revenue') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
            <span class="font-medium text-sm">Revenue Reports</span>
        </a>
        <a href="{{ route('admin.finance.expenses') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.finance.expenses') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium text-sm">Expenses</span>
        </a>
        <a href="{{ route('admin.finance.stripe') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.finance.stripe') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Stripe Dashboard</span>
        </a>
        <a href="{{ route('admin.finance.settings') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.finance.settings') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
            <span class="font-medium text-sm">Financial Settings</span>
        </a>
    </div>
</div>

<!-- Partnerships -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Partnerships</p>
    <div class="space-y-1">
        <a href="{{ route('admin.partnerships.partners') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.partnerships.partners') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Partners List</span>
        </a>
        <a href="{{ route('admin.partnerships.sponsors') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.partnerships.sponsors') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
            <span class="font-medium text-sm">Sponsors</span>
        </a>
        <a href="{{ route('admin.partnerships.investors') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.partnerships.investors') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Investors (Database)</span>
        </a>
        <a href="{{ route('admin.partnerships.mentors') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.partnerships.mentors') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            <span class="font-medium text-sm">Mentors</span>
        </a>
    </div>
</div>

<!-- Events -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Events</p>
    <div class="space-y-1">
        <a href="{{ route('admin.events.index') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.events.index') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">All Events</span>
        </a>
        <a href="{{ route('admin.events.create') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.events.create') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            <span class="font-medium text-sm">Create Event</span>
        </a>
        <a href="{{ route('admin.events.registrations') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.events.registrations') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="font-medium text-sm">Registrations</span>
        </a>
        <a href="{{ route('admin.events.calendar') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.events.calendar') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">Calendar View</span>
        </a>
    </div>
</div>

<!-- Resources -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Resources</p>
    <div class="space-y-1">
        <a href="{{ route('admin.resources.index') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.resources.index') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"></path></svg>
            <span class="font-medium text-sm">Resource Library</span>
        </a>
        <a href="{{ route('admin.resources.add') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.resources.add') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            <span class="font-medium text-sm">Add Resource</span>
        </a>
        <a href="{{ route('admin.resources.toolkit') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.resources.toolkit') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <span class="font-medium text-sm">Startup Toolkit</span>
        </a>
        <a href="{{ route('admin.resources.downloads') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.resources.downloads') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            <span class="font-medium text-sm">Downloads</span>
        </a>
    </div>
</div>

<!-- Support Tickets -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Support Tickets</p>
    <div class="space-y-1">
        <a href="{{ route('admin.support.index') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.support.index') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <span class="font-medium text-sm">All Tickets</span>
        </a>
        <a href="{{ route('admin.support.open') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.support.open') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium text-sm">Open Tickets</span>
        </a>
        <a href="{{ route('admin.support.resolved') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.support.resolved') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="font-medium text-sm">Resolved Tickets</span>
        </a>
        <a href="{{ route('admin.support.settings') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.support.settings') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
            <span class="font-medium text-sm">Ticket Settings</span>
        </a>
    </div>
</div>

<!-- Reports -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Reports</p>
    <div class="space-y-1">
        <a href="{{ route('admin.reports.daily') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.reports.daily') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="font-medium text-sm">Daily Report</span>
        </a>
        <a href="{{ route('admin.reports.monthly') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.reports.monthly') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="font-medium text-sm">Monthly Report</span>
        </a>
        <a href="{{ route('admin.reports.annual') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.reports.annual') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="font-medium text-sm">Annual Report</span>
        </a>
        <a href="{{ route('admin.reports.user-growth') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.reports.user-growth') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            <span class="font-medium text-sm">User Growth</span>
        </a>
        <a href="{{ route('admin.reports.revenue') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.reports.revenue') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"></path></svg>
            <span class="font-medium text-sm">Revenue Report</span>
        </a>
        <a href="{{ route('admin.reports.export') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.reports.export') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            <span class="font-medium text-sm">Export Data</span>
        </a>
    </div>
</div>

<!-- System -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">System</p>
    <div class="space-y-1">
        <a href="{{ route('admin.system.settings') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.settings') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
            <span class="font-medium text-sm">General Settings</span>
        </a>
        <a href="{{ route('admin.system.emails') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.emails') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">Email Settings</span>
        </a>
        <a href="{{ route('admin.system.payments') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.payments') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="font-medium text-sm">Payment Settings</span>
        </a>
        <a href="{{ route('admin.system.api-keys') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.api-keys') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
            <span class="font-medium text-sm">API Keys</span>
        </a>
        <a href="{{ route('admin.system.audit-logs') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.audit-logs') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium text-sm">Audit Logs</span>
        </a>
        <a href="{{ route('admin.system.backup') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.backup') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
            <span class="font-medium text-sm">Backup</span>
        </a>
        <a href="{{ route('admin.system.status') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('admin.system.status') ? 'bg-emerald-600 text-white shadow-lg' : 'text-gray-500 hover:bg-emerald-50 hover:text-emerald-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            <span class="font-medium text-sm">System Status</span>
        </a>
    </div>
</div>
