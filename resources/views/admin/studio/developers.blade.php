@extends('layouts.dashboard')

@section('dashboard-title', 'Studio Developers')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Studio Developers</h2>
            <p class="text-sm text-gray-500">Manage development team members and their skills.</p>
        </div>
        <a href="{{ route('admin.studio.developers.add') }}" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Add Developer</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($developers as $developer)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold">
                        {{ substr($developer->first_name, 0, 1) }}{{ substr($developer->last_name, 0, 1) }}
                    </div>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('admin.studio.developers.edit', $developer->id) }}" class="p-2 text-gray-400 hover:text-emerald-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </a>
                        <form action="{{ route('admin.studio.developers.destroy', $developer->id) }}" method="POST" class="inline" onsubmit="return confirm('Remove this developer?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $developer->first_name }} {{ $developer->last_name }}</h3>
                <p class="text-sm text-gray-500 mb-3">{{ $developer->email }}</p>

                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Projects</span>
                        <span class="font-semibold text-gray-900">{{ $developer->studio_projects_count ?? 0 }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Experience</span>
                        <span class="font-semibold text-gray-900">{{ $developer->experience_years ?? 0 }} years</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Rate</span>
                        <span class="font-semibold text-gray-900">${{ $developer->hourly_rate ?? 0 }}/hr</span>
                    </div>
                </div>

                @if($developer->skills)
                    <div class="flex flex-wrap gap-1 mb-3">
                        @foreach($developer->skills as $skill)
                            <span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs">{{ $skill }}</span>
                        @endforeach
                    </div>
                @endif

                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                        @if($developer->availability === 'full_time') bg-green-100 text-green-800
                        @elseif($developer->availability === 'part_time') bg-blue-100 text-blue-800
                        @elseif($developer->availability === 'contract') bg-amber-100 text-amber-800
                        @else bg-purple-100 text-purple-800
                        @endif">
                        {{ ucwords(str_replace('_', ' ', $developer->availability)) }}
                    </span>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <p class="text-gray-500">No developers found. Add your first team member!</p>
            </div>
        @endforelse
    </div>
</div>
@endsection