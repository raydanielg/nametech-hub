@extends('layouts.dashboard')

@section('dashboard-title', 'Studio Clients')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($clients as $client)
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center font-bold text-lg">{{ substr($client->company_name ?? $client->name ?? 'C', 0, 1) }}</div>
                    <div>
                        <h4 class="font-black text-gray-900">{{ $client->company_name ?? $client->name }}</h4>
                        <p class="text-xs text-gray-400">{{ $client->email }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black">{{ $client->projects_count }} Projects</span>
            </div>
            <div class="pt-4 border-t border-gray-50 flex justify-between text-sm">
                <span class="text-gray-400">Phone: {{ $client->phone ?? 'N/A' }}</span>
                <a href="#" class="text-pink-600 font-medium text-xs hover:underline">View Details</a>
            </div>
        </div>
        @empty
        <div class="col-span-2 bg-white p-10 rounded-3xl text-center text-gray-400 italic">No clients found.</div>
        @endforelse
    </div>
    @if($clients->hasPages())
    <div class="bg-white p-4 rounded-3xl">{{ $clients->links() }}</div>
    @endif
</div>
@endsection
