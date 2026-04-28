@extends('layouts.dashboard')

@section('dashboard-title', 'All Payments')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">All Payments</h2>
            <p class="text-sm text-gray-500">Track and manage customer payments.</p>
        </div>
        <button onclick="document.getElementById('addPaymentModal').classList.remove('hidden')" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Record Payment</span>
        </button>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

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
                        <th class="px-8 py-5">Status</th>
                        <th class="px-8 py-5">Date</th>
                        <th class="px-8 py-5 text-right">Actions</th>
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
                        <td class="px-8 py-5">
                            @if($payment->status === 'completed')
                                <span class="px-3 py-1 bg-emerald-50 text-emerald-600 rounded-full text-[10px] font-black uppercase">Completed</span>
                            @elseif($payment->status === 'pending')
                                <span class="px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-[10px] font-black uppercase">Pending</span>
                            @elseif($payment->status === 'failed')
                                <span class="px-3 py-1 bg-red-50 text-red-600 rounded-full text-[10px] font-black uppercase">Failed</span>
                            @else
                                <span class="px-3 py-1 bg-gray-50 text-gray-600 rounded-full text-[10px] font-black uppercase">Refunded</span>
                            @endif
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $payment->created_at?->format('M d, Y H:i') }}</td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('finance.payments.edit', $payment->id) }}" class="p-2 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-colors" title="Edit Payment">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                @if($payment->status === 'completed')
                                    <form action="{{ route('finance.payments.refund', $payment->id) }}" method="POST" class="inline" onsubmit="return confirm('Refund this payment?')">
                                        @csrf
                                        <button type="submit" class="p-2 text-gray-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-colors" title="Refund Payment">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"></path></svg>
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('finance.payments.destroy', $payment->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this payment?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Payment">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="px-8 py-10 text-center text-gray-400 italic">No payments found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($payments->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $payments->links() }}</div>
        @endif
    </div>
</div>

<!-- Add Payment Modal -->
<div id="addPaymentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold text-gray-900">Record Payment</h3>
            <button onclick="document.getElementById('addPaymentModal').classList.add('hidden')" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <form action="{{ route('finance.payments.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Customer</label>
                <select name="user_id" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="">Select Customer</option>
                    @foreach(\App\Models\User::where('status', 'active')->get() as $user)
                        <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Invoice (Optional)</label>
                <select name="invoice_id" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="">No Invoice</option>
                    @foreach(\App\Models\Invoice::where('status', 'pending')->get() as $invoice)
                        <option value="{{ $invoice->id }}">INV-{{ $invoice->invoice_number }} (${{ number_format($invoice->total_amount, 2) }})</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Amount ($)</label>
                <input type="number" name="amount" step="0.01" min="0" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Payment Method</label>
                <select name="payment_method" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="cash">Cash</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="stripe">Stripe</option>
                    <option value="paypal">PayPal</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Transaction ID</label>
                <input type="text" name="transaction_id" placeholder="Optional" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                <select name="status" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none">
                    <option value="completed">Completed</option>
                    <option value="pending">Pending</option>
                    <option value="failed">Failed</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Notes</label>
                <textarea name="notes" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none"></textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="document.getElementById('addPaymentModal').classList.add('hidden')" class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200">
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700">
                    Record Payment
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
