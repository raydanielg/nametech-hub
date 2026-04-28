@extends('layouts.dashboard')

@section('dashboard-title', 'All Resources')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Resources</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Downloads</p>
            <h3 class="text-2xl font-black text-blue-600">{{ number_format($stats['downloads']) }}</h3>
        </div>
    </div>

    <!-- Resources Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($resources as $resource)
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition group">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 bg-{{ $resource->type === 'document' ? 'blue' : ($resource->type === 'video' ? 'pink' : 'green') }}-50 rounded-2xl flex items-center justify-center">
                    @if($resource->type === 'document')
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    @elseif($resource->type === 'video')
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    @else
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    @endif
                </div>
                <span class="px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-[10px] font-black uppercase">{{ $resource->type }}</span>
            </div>
            <h4 class="font-black text-gray-900 mb-2 truncate">{{ $resource->title }}</h4>
            <p class="text-xs text-gray-400 mb-4 line-clamp-2">{{ $resource->description }}</p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                <div class="text-xs text-gray-400">
                    <span>By {{ $resource->uploader->first_name ?? 'Admin' }}</span>
                </div>
                <div class="flex items-center space-x-1 text-xs text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    <span>{{ $resource->download_count ?? 0 }}</span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-3 bg-white p-10 rounded-3xl text-center text-gray-400 italic">No resources uploaded yet.</div>
        @endforelse
    </div>
    
    @if($resources->hasPages())
    <div class="bg-white p-4 rounded-3xl">{{ $resources->links() }}</div>
    @endif
</div>
@endsection
