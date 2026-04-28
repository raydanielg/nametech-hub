@extends('layouts.dashboard')

@section('dashboard-title', 'Studio Clients')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Client</th>
                        <th class="px-8 py-5">Company</th>
                        <th class="px-8 py-5">Projects</th>
                        <th class="px-8 py-5">Email</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($clients as $client)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center font-bold">{{ substr($client->name ?? 'C', 0, 1) }}</div>
                                <span class="text-sm font-bold text-gray-800">{{ $client->name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $client->company_name ?? 'N/A' }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black">{{ $client->projects_count }} Projects</span>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $client->email }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="px-8 py-10 text-center text-gray-400 italic">No studio clients found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($clients->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $clients->links() }}</div>
        @endif
    </div>
</div>
@endsection
