@extends('layouts.dashboard')

@section('dashboard-title', 'All Invoices')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Invoices</p>
            <h3 class="text-2xl font-black text-gray-900">{{ $stats['total'] }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Paid (TSh)</p>
            <h3 class="text-2xl font-black text-green-600">{{ number_format($stats['paid']) }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Pending (TSh)</p>
            <h3 class="text-2xl font-black text-yellow-600">{{ number_format($stats['pending']) }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Overdue</p>
            <h3 class="text-2xl font-black text-pink-600">{{ $stats['overdue'] }}</h3>
        </div>
    </div>

    <!-- Invoices Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Invoice #</th>
                        <th class="px-8 py-5">Customer</th>
                        <th class="px-8 py-5">Amount (TSh)</th>
                        <th class="px-8 py-5">Date</th>
                        <th class="px-8 py-5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($invoices as $invoice)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5 text-sm font-bold text-gray-800">#{{ $invoice->invoice_number ?? $invoice->id }}</td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $invoice->user->first_name ?? '-' }} {{ $invoice->user->last_name ?? '' }}</td>
                        <td class="px-8 py-5 text-sm font-bold text-gray-800">{{ number_format($invoice->total_amount) }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $invoice->created_at?->format('M d, Y') }}</td>
                        <td class="px-8 py-5">
                            @if($invoice->status === 'paid')
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase">Paid</span>
                            @elseif($invoice->status === 'pending')
                                <span class="px-3 py-1 bg-yellow-50 text-yellow-600 rounded-full text-[10px] font-black uppercase">Pending</span>
                            @else
                                <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-[10px] font-black uppercase">Overdue</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No invoices found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($invoices->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $invoices->links() }}</div>
        @endif
    </div>
</div>
@endsection
