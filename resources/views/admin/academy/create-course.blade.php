@extends('layouts.dashboard')

@section('dashboard-title', 'Create New Course')

@section('dashboard-content')
<div class="max-w-4xl mx-auto fade-in">
    <!-- Header -->
    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('admin.academy.courses') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-gray-400 hover:text-gray-900 transition-colors shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <div>
            <h3 class="text-2xl font-black text-gray-900">Add New Course</h3>
            <p class="text-sm text-gray-500 font-medium">Create a new course for the NAMTECH Academy</p>
        </div>
    </div>

    <!-- Form -->
    <form action="{{ route('admin.academy.courses.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-wider ml-1">Course Title</label>
                    <input type="text" name="title" required placeholder="e.g. Full Stack Web Development" 
                        class="w-full px-5 py-3.5 bg-gray-50 border-0 rounded-2xl text-sm focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-wider ml-1">Duration</label>
                    <input type="text" name="duration" required placeholder="e.g. 6 Months" 
                        class="w-full px-5 py-3.5 bg-gray-50 border-0 rounded-2xl text-sm focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-[10px] font-black text-gray-400 uppercase tracking-wider ml-1">Course Description</label>
                <textarea name="description" required rows="6" placeholder="Describe what students will learn in this course..." 
                    class="w-full px-5 py-3.5 bg-gray-50 border-0 rounded-2xl text-sm focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all resize-none"></textarea>
            </div>

            <div class="pt-4 flex items-center justify-end gap-3">
                <a href="{{ route('admin.academy.courses') }}" class="px-6 py-3 text-sm font-bold text-gray-500 hover:text-gray-900 transition-colors">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-gray-900 text-white rounded-2xl text-sm font-bold hover:bg-gray-800 transition-all shadow-lg shadow-gray-200">
                    Create Course
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
