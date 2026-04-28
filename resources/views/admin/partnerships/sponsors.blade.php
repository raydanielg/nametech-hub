@extends('layouts.dashboard')

@section('dashboard-title', 'Sponsors')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Sponsors</h2>
            <p class="text-sm text-gray-500">Manage sponsorship relationships and funding.</p>
        </div>
        <a href="{{ route('partnerships.sponsors.add') }}" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Add Sponsor</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Total Sponsors</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $stats['total'] }}</p>
                </div>
                <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Active</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $stats['active'] }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Total Funding</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">${{ number_format($stats['total_funding']) }}</p>
                </div>
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">New This Month</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $stats['new_this_month'] }}</p>
                </div>
                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsors Table -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h3 class="text-lg font-bold text-gray-900">All Sponsors</h3>
                <div class="flex gap-3">
                    <div class="relative">
                        <input type="text" placeholder="Search sponsors..." class="pl-10 pr-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all w-64">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <select class="px-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-emerald-500">
                        <option>All Levels</option>
                        <option>Platinum</option>
                        <option>Gold</option>
                        <option>Silver</option>
                        <option>Bronze</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50 border-b border-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Sponsor</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Company</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Sponsorship Level</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Funding Amount</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-left py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Joined</th>
                        <th class="text-right py-4 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($sponsors as $sponsor)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                                    @if($sponsor->logo)
                                        <img src="{{ asset('storage/' . $sponsor->logo) }}" alt="{{ $sponsor->name }}" class="w-10 h-10 rounded-full object-cover">
                                    @else
                                        <span class="text-emerald-600 font-bold text-sm">{{ substr($sponsor->name, 0, 1) }}</span>
                                    @endif
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">{{ $sponsor->name }}</p>
                                    <p class="text-xs text-gray-500">{{ $sponsor->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $sponsor->company }}</p>
                                <p class="text-xs text-gray-500">{{ $sponsor->phone ?? 'N/A' }}</p>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            @if($sponsor->sponsorship_level === 'Platinum')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    {{ $sponsor->sponsorship_level }}
                                </span>
                            @elseif($sponsor->sponsorship_level === 'Gold')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    {{ $sponsor->sponsorship_level }}
                                </span>
                            @elseif($sponsor->sponsorship_level === 'Silver')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    {{ $sponsor->sponsorship_level }}
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                    {{ $sponsor->sponsorship_level }}
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-6">
                            <span class="text-sm font-semibold text-gray-900">${{ number_format($sponsor->funding_amount, 2) }}</span>
                        </td>
                        <td class="py-4 px-6">
                            @if($sponsor->status === 'active')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    Active
                                </span>
                            @elseif($sponsor->status === 'pending')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    Pending
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-500">
                            {{ $sponsor->created_at->format('M d, Y') }}
                        </td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('partnerships.sponsors.edit', $sponsor->id) }}" class="p-2 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors" title="Edit Sponsor">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                @if($sponsor->website)
                                    <a href="{{ $sponsor->website }}" target="_blank" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Visit Website">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    </a>
                                @endif
                                <form action="{{ route('partnerships.sponsors.destroy', $sponsor->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this sponsor?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Sponsor">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="px-6 py-10 text-center text-gray-400 italic">No sponsors found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-6 border-t border-gray-100 flex items-center justify-between">
            <p class="text-sm text-gray-500">Showing <span class="font-medium text-gray-900">{{ $sponsors->firstItem() }}</span> to <span class="font-medium text-gray-900">{{ $sponsors->lastItem() }}</span> of <span class="font-medium text-gray-900">{{ $sponsors->total() }}</span> sponsors</p>
            <div class="flex gap-2">
                {{ $sponsors->links() }}
            </div>
        </div>
    </div>
</div>
@endsection