@extends('layouts.dashboard')

@section('dashboard-title', 'Audit Logs')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Audit Logs</h2>
            <p class="text-sm text-gray-500">Track all system activities and user actions.</p>
        </div>
        <div class="text-sm text-gray-500">{{ $logs->total() }} records found</div>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Time</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">User</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Action</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">IP Address</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($logs as $log)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $log->created_at->format('M d, Y') }}</div>
                            <div class="text-xs text-gray-500">{{ $log->created_at->format('H:i:s') }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @if($log->user)
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 font-bold text-xs">
                                        {{ substr($log->user->first_name, 0, 1) }}{{ substr($log->user->last_name, 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $log->user->first_name }} {{ $log->user->last_name }}</div>
                                        <div class="text-xs text-gray-500">{{ $log->user->email }}</div>
                                    </div>
                                </div>
                            @else
                                <span class="text-sm text-gray-400">System</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                @if(in_array($log->action, ['login', 'view', 'read'])) bg-blue-100 text-blue-800
                                @elseif(in_array($log->action, ['create', 'store', 'backup_created'])) bg-emerald-100 text-emerald-800
                                @elseif(in_array($log->action, ['update', 'edit'])) bg-amber-100 text-amber-800
                                @elseif(in_array($log->action, ['delete', 'destroy', 'revoke'])) bg-red-100 text-red-800
                                @else bg-gray-100 text-gray-800
                                @endif">
                                {{ $log->action }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-700">{{ $log->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <code class="text-xs bg-gray-100 px-2 py-1 rounded font-mono text-gray-600">{{ $log->ip_address }}</code>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="text-gray-500">No audit logs found.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($logs->hasPages())
            <div class="px-6 py-4 border-t border-gray-100">{{ $logs->links() }}</div>
        @endif
    </div>
</div>
@endsection
