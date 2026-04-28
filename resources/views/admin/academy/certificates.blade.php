@extends('layouts.dashboard')

@section('dashboard-title', 'Manage Certificates')

@section('dashboard-content')
<div class="space-y-8 fade-in">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h3 class="text-2xl font-black text-gray-900">Certificates</h3>
            <p class="text-sm text-gray-500 font-medium mt-1">Manage and issue completion certificates for courses</p>
        </div>
        <div class="flex gap-3">
            <button onclick="document.getElementById('issueCertificateModal').classList.remove('hidden')" class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Issue Certificate
            </button>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">Total Issued</p>
                    <h4 class="text-2xl font-black text-gray-900">1,248</h4>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">This Month</p>
                    <h4 class="text-2xl font-black text-gray-900">86</h4>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">Courses</p>
                    <h4 class="text-2xl font-black text-gray-900">12</h4>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider">Students</p>
                    <h4 class="text-2xl font-black text-gray-900">342</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Certificates List -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h4 class="text-lg font-black text-gray-900">Recent Certificates</h4>
                <div class="flex gap-3">
                    <div class="relative">
                        <input type="text" placeholder="Search student..." class="pl-10 pr-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all w-64">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <select class="px-4 py-2.5 bg-gray-50 border-0 rounded-xl text-sm focus:ring-2 focus:ring-gray-900">
                        <option>All Courses</option>
                        <option>Web Development</option>
                        <option>Data Science</option>
                        <option>UI/UX Design</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50">
                    <tr>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Student</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Course</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Issue Date</th>
                        <th class="text-left py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-right py-4 px-8 text-[10px] font-black text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php
                    $certificates = [
                        ['name' => 'John Doe', 'course' => 'Full Stack Web Dev', 'date' => 'Jan 15, 2024', 'status' => 'active', 'avatar' => 'JD'],
                        ['name' => 'Sarah Kim', 'course' => 'Data Science Fund.', 'date' => 'Jan 14, 2024', 'status' => 'active', 'avatar' => 'SK'],
                        ['name' => 'Mike Chen', 'course' => 'UI/UX Design Pro', 'date' => 'Jan 12, 2024', 'status' => 'revoked', 'avatar' => 'MC'],
                        ['name' => 'Anna Lee', 'course' => 'Mobile App Dev', 'date' => 'Jan 10, 2024', 'status' => 'active', 'avatar' => 'AL'],
                        ['name' => 'David Park', 'course' => 'Cloud Computing', 'date' => 'Jan 08, 2024', 'status' => 'active', 'avatar' => 'DP'],
                    ];
                    @endphp
                    @foreach($certificates as $cert)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="py-4 px-8">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-gray-900 to-gray-700 rounded-xl flex items-center justify-center text-white text-xs font-bold">
                                    {{ $cert['avatar'] }}
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">{{ $cert['name'] }}</p>
                                    <p class="text-xs text-gray-400">student@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-8">
                            <span class="text-sm font-medium text-gray-700">{{ $cert['course'] }}</span>
                        </td>
                        <td class="py-4 px-8">
                            <span class="text-sm text-gray-500">{{ $cert['date'] }}</span>
                        </td>
                        <td class="py-4 px-8">
                            @if($cert['status'] == 'active')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-lg text-xs font-bold">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-50 text-red-600 rounded-lg text-xs font-bold">
                                    <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                    Revoked
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-8 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors" title="View">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Download">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Revoke">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="p-6 border-t border-gray-100 flex items-center justify-between">
            <p class="text-sm text-gray-500">Showing <span class="font-bold text-gray-900">1-5</span> of <span class="font-bold text-gray-900">124</span> certificates</p>
            <div class="flex gap-2">
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">Previous</button>
                <button class="px-4 py-2 text-sm font-bold text-gray-900 bg-gray-100 rounded-lg">1</button>
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">2</button>
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">3</button>
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
