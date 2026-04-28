@extends('layouts.dashboard')

@section('dashboard-title', 'Academy Students')

@section('dashboard-content')
<div class="space-y-8 fade-in text-black">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h3 class="text-2xl font-black text-gray-900">Academy Students</h3>
            <p class="text-sm text-gray-500 font-medium mt-1">Manage and track students enrolled in the Academy</p>
        </div>
    </div>

    <!-- Students Table -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-black text-gray-900">Registered Students</h4>
            <div class="relative">
                <input type="text" placeholder="Search students..." class="pl-10 pr-4 py-2 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-gray-900 w-64">
                <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Student</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Email</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Enrollments</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-right py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($students as $student)
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="py-4 px-8">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center text-white text-xs font-bold">
                                    {{ strtoupper(substr($student->first_name, 0, 1)) }}{{ strtoupper(substr($student->last_name, 0, 1)) }}
                                </div>
                                <span class="text-sm font-bold text-gray-900">{{ $student->first_name }} {{ $student->last_name }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-8 text-sm text-gray-500">{{ $student->email }}</td>
                        <td class="py-4 px-8 text-sm font-black text-gray-900">{{ $student->enrollments_count }}</td>
                        <td class="py-4 px-8">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-lg text-xs font-bold">
                                {{ ucfirst($student->status) }}
                            </span>
                        </td>
                        <td class="py-4 px-8 text-right">
                            <button class="p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-100 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-6">
            {{ $students->links() }}
        </div>
    </div>
</div>
@endsection
