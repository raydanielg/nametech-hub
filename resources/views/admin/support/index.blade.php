@extends('layouts.dashboard')

@section('dashboard-title', 'Support Tickets')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Tickets</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Open</p>
            <h3 class="text-2xl font-black text-pink-600">{{ $stats['open'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">In Progress</p>
            <h3 class="text-2xl font-black text-blue-600">{{ $stats['in_progress'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Resolved</p>
            <h3 class="text-2xl font-black text-green-600">{{ $stats['resolved'] }}</h3>
        </div>
    </div>

    <!-- Tickets Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Ticket ID</th>
                        <th class="px-8 py-5">Subject</th>
                        <th class="px-8 py-5">Submitted By</th>
                        <th class="px-8 py-5">Priority</th>
                        <th class="px-8 py-5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($tickets as $ticket)
                    <tr class="hover:bg-gray-50/50 transition cursor-pointer" onclick="window.location='#'">
                        <td class="px-8 py-5 text-sm font-bold text-pink-600">#{{ $ticket->ticket_number ?? $ticket->id }}</td>
                        <td class="px-8 py-5 text-sm text-gray-800 font-medium truncate max-w-xs">{{ $ticket->subject }}</td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $ticket->user->first_name ?? '-' }} {{ $ticket->user->last_name ?? '' }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-{{ $ticket->priority === 'high' ? 'pink' : ($ticket->priority === 'medium' ? 'yellow' : 'gray') }}-50 text-{{ $ticket->priority === 'high' ? 'pink' : ($ticket->priority === 'medium' ? 'yellow' : 'gray') }}-600 rounded-full text-[10px] font-black uppercase">{{ $ticket->priority }}</span>
                        </td>
                        <td class="px-8 py-5">
                            @if($ticket->status === 'open')
                                <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-[10px] font-black uppercase">Open</span>
                            @elseif($ticket->status === 'in_progress')
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase">In Progress</span>
                            @else
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase">Resolved</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No support tickets found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($tickets->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $tickets->links() }}</div>
        @endif
    </div>
</div>
@endsection
