@extends('layouts.dashboard')

@section('dashboard-title', 'All Payments')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Revenue (TSh)</p>
            <h3 class="text-2xl font-black text-gray-900">{{ number_format($stats['total']) }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">Today (TSh)</p>
            <h3 class="text-2xl font-black text-green-600">{{ number_format($stats['today']) }}</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-1">This Month (TSh)</p>
            <h3 class="text-2xl font-black text-blue-600">{{ number_format($stats['this_month']) }}</h3>
        </div>
    </div>

    <!-- Payments Table -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Payment ID</th>
                        <th class="px-8 py-5">Customer</th>
                        <th class="px-8 py-5">Amount (TSh)</th>
                        <th class="px-8 py-5">Method</th>
                        <th class="px-8 py-5">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($payments as $payment)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5 text-sm font-bold text-gray-800">#{{ $payment->payment_id ?? $payment->id }}</td>
                        <td class="px-8 py-5 text-sm text-gray-600">{{ $payment->user->first_name ?? '-' }} {{ $payment->user->last_name ?? '' }}</td>
                        <td class="px-8 py-5 text-sm font-bold text-green-600">{{ number_format($payment->amount) }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-[10px] font-black uppercase">{{ $payment->payment_method ?? 'Bank' }}</span>
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $payment->created_at?->format('M d, Y H:i') }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No payments found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($payments->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $payments->links() }}</div>
        @endif
    </div>
</div>
@endsection
