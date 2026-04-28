@extends('layouts.dashboard')

@section('dashboard-title', 'Mentorship Sessions')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Mentee</th>
                        <th class="px-8 py-5">Date & Time</th>
                        <th class="px-8 py-5">Duration</th>
                        <th class="px-8 py-5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($sessions as $session)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5 text-sm font-bold text-gray-800">{{ $session->mentee->first_name ?? 'N/A' }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $session->start_time }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $session->duration }} min</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-{{ $session->status === 'completed' ? 'green' : 'blue' }}-50 text-{{ $session->status === 'completed' ? 'green' : 'blue' }}-600 rounded-full text-[10px] font-black uppercase">{{ $session->status }}</span>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="px-8 py-10 text-center text-gray-400 italic">No mentorship sessions found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
