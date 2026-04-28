@extends('layouts.dashboard')

@section('dashboard-title', 'Course Enrollments')

@section('dashboard-content')
<div class="space-y-8 fade-in text-black">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h3 class="text-2xl font-black text-gray-900">Enrollments</h3>
            <p class="text-sm text-gray-500 font-medium mt-1">Track student enrollment status across all courses</p>
        </div>
    </div>

    <!-- Enrollments Table -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-black text-gray-900">Active Enrollments</h4>
            <div class="flex gap-3 text-black">
                <select class="px-4 py-2 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-gray-900">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Completed</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-black">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Student</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Course</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Progress</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-right py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($enrollments as $enrollment)
                    <tr class="hover:bg-gray-50 transition-colors group text-black">
                        <td class="py-4 px-8">
                            <div class="flex flex-col text-black">
                                <span class="text-sm font-bold text-gray-900">{{ $enrollment->user->first_name }} {{ $enrollment->user->last_name }}</span>
                                <span class="text-xs text-gray-400">{{ $enrollment->user->email }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-8 text-sm font-medium text-gray-700">
                            {{ $enrollment->academyCourse->title ?? 'N/A' }}
                        </td>
                        <td class="py-4 px-8">
                            <div class="w-full bg-gray-100 rounded-full h-1.5 max-w-[100px]">
                                <div class="bg-gray-900 h-1.5 rounded-full" style="width: {{ $enrollment->progress ?? 0 }}%"></div>
                            </div>
                            <span class="text-[10px] font-bold text-gray-400 mt-1 block">{{ $enrollment->progress ?? 0 }}% Complete</span>
                        </td>
                        <td class="py-4 px-8 text-black">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold">
                                {{ ucfirst($enrollment->status) }}
                            </span>
                        </td>
                        <td class="py-4 px-8 text-right">
                            <button class="p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-100 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-6">
            {{ $enrollments->links() }}
        </div>
    </div>
</div>
@endsection
