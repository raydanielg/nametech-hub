@extends('layouts.dashboard')

@section('dashboard-title', 'Team Workload')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Developer</th>
                        <th class="px-8 py-5">Email</th>
                        <th class="px-8 py-5">Projects</th>
                        <th class="px-8 py-5">Tasks</th>
                        <th class="px-8 py-5">Load</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($developers as $dev)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center font-bold">{{ substr($dev->first_name, 0, 1) }}</div>
                                <span class="text-sm font-bold text-gray-800">{{ $dev->first_name }} {{ $dev->last_name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $dev->email }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black">{{ $dev->studio_projects_count ?? 0 }}</span>
                        </td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-[10px] font-black">{{ $dev->studio_tasks_count ?? 0 }}</span>
                        </td>
                        <td class="px-8 py-5 w-32">
                            @php $load = min(100, (($dev->studio_tasks_count ?? 0) * 10)); @endphp
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-{{ $load > 70 ? 'pink' : ($load > 40 ? 'yellow' : 'green') }}-500 h-1.5 rounded-full" style="width: {{ $load }}%"></div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No developers found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($developers->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $developers->links() }}</div>
        @endif
    </div>
</div>
@endsection
