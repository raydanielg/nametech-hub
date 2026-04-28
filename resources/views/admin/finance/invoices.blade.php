@extends('layouts.dashboard')

@section('dashboard-title', 'All Invoices')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">All Invoices</h2>
            <p class="text-sm text-gray-500">Manage customer invoices and billing.</p>
        </div>
        <a href="{{ route('finance.invoices.add') }}" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Add Invoice</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

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
                        <th class="px-8 py-5 text-right">Actions</th>
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
                        <td class="px-8 py-5 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('finance.invoices.edit', $invoice->id) }}" class="p-2 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors" title="Edit Invoice">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                <form action="{{ route('finance.invoices.send', $invoice->id) }}" method="POST" class="inline" onsubmit="return confirm('Send this invoice?')">
                                    @csrf
                                    <button type="submit" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Send Invoice">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </button>
                                </form>
                                @if($invoice->status !== 'paid')
                                    <form action="{{ route('finance.invoices.mark-paid', $invoice->id) }}" method="POST" class="inline" onsubmit="return confirm('Mark this invoice as paid?')">
                                        @csrf
                                        <button type="submit" class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg transition-colors" title="Mark as Paid">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('finance.invoices.destroy', $invoice->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this invoice?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Invoice">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="px-8 py-10 text-center text-gray-400 italic">No invoices found.</td></tr>
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
