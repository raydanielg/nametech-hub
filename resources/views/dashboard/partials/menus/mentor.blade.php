<!-- Mentorship -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Mentorship</p>
    <div class="space-y-1">
        <a href="{{ route('mentor.mentees') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('mentor.mentees') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <span class="font-medium text-sm">My Mentees</span>
        </a>
        <a href="{{ route('mentor.sessions') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('mentor.sessions') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-sm">Sessions</span>
        </a>
    </div>
</div>

<!-- Knowledge Base -->
<div class="mb-4">
    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 px-2">Library</p>
    <div class="space-y-1">
        <a href="{{ route('mentor.resources') }}" class="flex items-center space-x-3 p-2 rounded-xl {{ request()->routeIs('mentor.resources') ? 'bg-pink-50 text-pink-600' : 'text-gray-500 hover:bg-pink-50 hover:text-pink-600' }} transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <span class="font-medium text-sm">Mentor Resources</span>
        </a>
    </div>
</div>
