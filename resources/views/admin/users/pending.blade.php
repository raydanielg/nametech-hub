@extends('layouts.dashboard')

@section('dashboard-title', 'Pending Approvals')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Pending Approvals</h2>
            <p class="text-sm text-gray-500">Review and approve user registration requests.</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-5">
            <div class="text-3xl font-bold text-amber-600">{{ $stats['total_pending'] ?? 0 }}</div>
            <div class="text-sm text-gray-500">Total Pending</div>
        </div>
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-5">
            <div class="text-3xl font-bold text-blue-600">{{ $stats['pending_today'] ?? 0 }}</div>
            <div class="text-sm text-gray-500">New Today</div>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">User</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Role Requested</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Registered</th>
                    <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($users as $user)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center text-amber-600 font-bold">
                                    {{ substr($user->first_name, 0, 1) }}{{ substr($user->last_name, 0, 1) }}
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">{{ $user->first_name }} {{ $user->last_name }}</div>
                                    <div class="text-xs text-gray-500">ID: {{ substr($user->id, 0, 8) }}...</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-700">{{ $user->email }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ ucwords(str_replace('_', ' ', $user->roles->first()->name ?? 'N/A')) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-500">{{ $user->created_at->diffForHumans() }}</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end space-x-2">
                                <form action="{{ route('admin.users.approve', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="px-3 py-1.5 bg-emerald-600 text-white text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors">
                                        Approve
                                    </button>
                                </form>
                                <form action="{{ route('admin.users.reject', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Reject this user?')">
                                    @csrf
                                    <button type="submit" class="px-3 py-1.5 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                        Reject
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="text-gray-500">No pending approvals. All caught up!</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($users->hasPages())
            <div class="px-6 py-4 border-t border-gray-100">{{ $users->links() }}</div>
        @endif
    </div>
</div>
@endsection
