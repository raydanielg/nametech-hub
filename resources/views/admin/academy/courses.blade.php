@extends('layouts.dashboard')

@section('dashboard-title', 'Academy Courses')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h3 class="text-2xl font-black text-gray-900">Academy Courses</h3>
            <p class="text-sm text-gray-500 font-medium mt-1">Manage bootcamps, courses, and educational content</p>
        </div>

        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
            </div>
        @endif
        <div class="flex gap-3">
            <a href="{{ route('admin.academy.courses.add') }}" class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add New Course
            </a>
        </div>
    </div>

    <!-- Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">Total Courses</p>
                    <h4 class="text-2xl font-black text-gray-900">{{ $stats['total_courses'] }}</h4>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">Active Courses</p>
                    <h4 class="text-2xl font-black text-gray-900">{{ $stats['active_courses'] }}</h4>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">Total Enrollments</p>
                    <h4 class="text-2xl font-black text-gray-900">{{ $stats['total_enrollments'] }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses List -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden text-black">
        <div class="p-8 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h4 class="text-lg font-black text-gray-900">Course Inventory</h4>
                <div class="flex gap-3 text-black">
                    <div class="relative">
                        <input type="text" placeholder="Search courses..." class="pl-10 pr-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all w-64">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50">
                    <tr>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Course</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Duration</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Enrollments</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-right py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($courses as $course)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="py-4 px-8">
                            <div>
                                <p class="text-sm font-bold text-gray-900">{{ $course->title }}</p>
                                <p class="text-xs text-gray-400 truncate max-w-xs">{{ Str::limit($course->description, 50) }}</p>
                            </div>
                        </td>
                        <td class="py-4 px-8">
                            <span class="text-sm font-medium text-gray-700">{{ $course->duration }}</span>
                        </td>
                        <td class="py-4 px-8">
                            <span class="text-sm font-black text-gray-900">{{ $course->enrollments_count }}</span>
                        </td>
                        <td class="py-4 px-8">
                            @if($course->status == 'active')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-lg text-xs font-bold">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-gray-50 text-gray-500 rounded-lg text-xs font-bold">
                                    <span class="w-1.5 h-1.5 bg-gray-400 rounded-full"></span>
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-8 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('admin.academy.courses.edit', $course->id) }}" class="p-2 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors" title="Edit Course">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                <form action="{{ route('admin.academy.courses.destroy', $course->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this course?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Course">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-6 border-t border-gray-100">
            {{ $courses->links() }}
        </div>
    </div>
</div>
@endsection
