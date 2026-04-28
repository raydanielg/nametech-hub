@extends('layouts.dashboard')

@section('dashboard-title', 'User Management')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Search and Filter Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </span>
            <input type="text" placeholder="Search by name, email or role..." class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-2xl leading-5 bg-gray-50 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-1 focus:ring-pink-500 focus:border-pink-500 sm:text-sm transition duration-150 ease-in-out">
        </div>
        <div class="flex items-center space-x-3">
            <button class="bg-gray-50 text-gray-500 px-4 py-2 rounded-2xl text-sm font-bold border border-gray-100 hover:bg-gray-100 transition">
                <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                Filter
            </button>
            <a href="{{ route('admin.users.add') }}" class="bg-pink-600 text-white px-6 py-2 rounded-2xl text-sm font-black shadow-lg shadow-pink-100 hover:bg-pink-700 transition transform hover:-translate-y-0.5">
                Add New User
            </a>
        </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Full Name & Email</th>
                        <th class="px-8 py-5">Assigned Role</th>
                        <th class="px-8 py-5">Current Status</th>
                        <th class="px-8 py-5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($users as $user)
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-pink-50 text-pink-600 rounded-2xl flex items-center justify-center font-black text-lg border-2 border-white shadow-sm">
                                    {{ substr($user->first_name, 0, 1) }}
                                </div>
                                <div>
                                    <p class="text-sm font-black text-gray-800">{{ $user->first_name }} {{ $user->last_name }}</p>
                                    <p class="text-[11px] text-gray-400 font-medium">{{ $user->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-center">
                            <span class="px-4 py-1.5 bg-gray-50 text-gray-500 rounded-xl text-[10px] font-black uppercase tracking-wider border border-gray-100">
                                {{ str_replace('_', ' ', $user->roles->first()->name ?? 'N/A') }}
                            </span>
                        </td>
                        <td class="px-8 py-5 text-center">
                            @if($user->status === 'active')
                                <span class="inline-flex items-center space-x-1.5 text-green-500 font-black text-[10px] uppercase bg-green-50 px-3 py-1 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span>Active</span>
                                </span>
                            @else
                                <span class="inline-flex items-center space-x-1.5 text-yellow-500 font-black text-[10px] uppercase bg-yellow-50 px-3 py-1 rounded-full">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span>
                                    <span>{{ str_replace('_', ' ', $user->status) }}</span>
                                </span>
                            @endif
                        </td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex items-center justify-end space-x-2 opacity-0 group-hover:opacity-100 transition duration-200">
                                <button class="p-2 text-gray-400 hover:text-pink-600 hover:bg-pink-50 rounded-xl transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-8 py-10 text-center text-gray-400 font-medium italic">No users found in the system.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($users->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">
            {{ $users->links() }}
        </div>
        @endif
    </div>
</div>
@endsection

