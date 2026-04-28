@extends('layouts.dashboard')

@section('dashboard-title', 'User Management')

@section('dashboard-content')
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-8 border-b border-gray-100 flex items-center justify-between">
        <h3 class="text-xl font-black text-gray-900">All Registered Users</h3>
        <a href="{{ route('admin.users.add') }}" class="bg-pink-600 text-white px-6 py-2 rounded-xl text-sm font-bold shadow-lg shadow-pink-100">Add User</a>
    </div>
    <div class="p-0">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-400 text-xs font-bold uppercase tracking-widest">
                <tr>
                    <th class="px-8 py-4">User</th>
                    <th class="px-8 py-4">Role</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="px-8 py-5">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-pink-100 rounded-xl flex items-center justify-center text-pink-600 font-bold">M</div>
                            <div>
                                <p class="text-sm font-bold text-gray-800">Malkia Admin</p>
                                <p class="text-xs text-gray-400">admin@namtech.hub</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-lg text-xs font-bold uppercase">Super Admin</span>
                    </td>
                    <td class="px-8 py-5">
                        <span class="flex items-center space-x-1.5 text-green-500 font-bold text-xs uppercase">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            <span>Active</span>
                        </span>
                    </td>
                    <td class="px-8 py-5">
                        <button class="text-gray-400 hover:text-pink-600 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
