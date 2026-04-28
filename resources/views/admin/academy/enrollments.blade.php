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
        <button onclick="document.getElementById('addEnrollmentModal').classList.remove('hidden')" class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Add Enrollment
        </button>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

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
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button onclick="editEnrollment({{ $enrollment->id }})" class="p-2 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors" title="Edit Enrollment">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <form action="{{ route('admin.academy.enrollments.destroy', $enrollment->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this enrollment?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Enrollment">
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

        <div class="p-6">
            {{ $enrollments->links() }}
        </div>
    </div>
</div>

<!-- Add Enrollment Modal -->
<div id="addEnrollmentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold text-gray-900">Add New Enrollment</h3>
            <button onclick="document.getElementById('addEnrollmentModal').classList.add('hidden')" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <form action="{{ route('admin.academy.enrollments.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Student</label>
                <select name="user_id" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="">Select Student</option>
                    @foreach(\App\Models\User::whereHas('roles', function($q) { $q->where('name', 'student'); })->get() as $student)
                        <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Course</label>
                <select name="academy_course_id" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="">Select Course</option>
                    @foreach(\App\Models\AcademyCourse::where('status', 'active')->get() as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                <select name="status" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="active">Active</option>
                    <option value="completed">Completed</option>
                    <option value="dropped">Dropped</option>
                    <option value="suspended">Suspended</option>
                </select>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="document.getElementById('addEnrollmentModal').classList.add('hidden')" class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200">
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700">
                    Add Enrollment
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function editEnrollment(id) {
    // Simple edit function - can be enhanced with a modal
    console.log('Edit enrollment:', id);
}
</script>
@endsection
