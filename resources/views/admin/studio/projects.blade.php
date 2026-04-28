@extends('layouts.dashboard')

@section('dashboard-title', 'Studio Projects')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Projects</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Active</p>
            <h3 class="text-2xl font-black text-blue-600">{{ $stats['active'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Completed</p>
            <h3 class="text-2xl font-black text-green-600">{{ $stats['completed'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Overdue</p>
            <h3 class="text-2xl font-black text-pink-600">{{ $stats['overdue'] }}</h3>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($projects as $project)
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h4 class="font-black text-gray-900">{{ $project->name }}</h4>
                    <p class="text-xs text-gray-400 mt-1">Client: {{ $project->client->company_name ?? $project->client->name ?? 'N/A' }}</p>
                </div>
                <span class="px-3 py-1 bg-{{ $project->status === 'active' ? 'blue' : ($project->status === 'completed' ? 'green' : 'gray') }}-50 text-{{ $project->status === 'active' ? 'blue' : ($project->status === 'completed' ? 'green' : 'gray') }}-600 rounded-full text-[10px] font-black uppercase">{{ $project->status }}</span>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between text-xs font-medium">
                    <span class="text-gray-400">Progress</span>
                    <span class="text-gray-800">{{ $project->progress ?? 0 }}%</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-2">
                    <div class="bg-pink-600 h-2 rounded-full" style="width: {{ $project->progress ?? 0 }}%"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-400 pt-2">
                    <span>Deadline: {{ $project->deadline?->format('M d, Y') ?? 'N/A' }}</span>
                    <span>{{ $project->developers->count() ?? 0 }} Developers</span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-2 bg-white p-10 rounded-3xl text-center text-gray-400 italic">No studio projects yet.</div>
        @endforelse
    </div>
    
    @if($projects->hasPages())
    <div class="bg-white p-4 rounded-3xl">{{ $projects->links() }}</div>
    @endif
</div>
@endsection
