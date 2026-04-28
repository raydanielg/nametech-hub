@extends('layouts.dashboard')

@section('dashboard-title', 'Edit Invoice')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Edit Invoice</h2>
            <p class="text-sm text-gray-500">Update invoice information and status.</p>
        </div>
        <a href="{{ route('finance.invoices') }}" class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors">
            Back to Invoices
        </a>
    </div>

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 rounded-xl p-4">
            <div class="flex items-center space-x-3">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <p class="text-sm font-medium text-red-800">Please fix the following errors:</p>
                    <ul class="mt-1 text-sm text-red-700">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <!-- Invoice Details Card -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-lg font-bold text-gray-900">Invoice #{{ $invoice->invoice_number }}</h3>
                <p class="text-sm text-gray-500">Created: {{ $invoice->created_at->format('M d, Y') }}</p>
            </div>
            <div class="text-right">
                <p class="text-2xl font-bold text-gray-900">${{ number_format($invoice->total_amount, 2) }}</p>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                    @if($invoice->status === 'paid') bg-emerald-100 text-emerald-800
                    @elseif($invoice->status === 'pending') bg-amber-100 text-amber-800
                    @elseif($invoice->status === 'overdue') bg-red-100 text-red-800
                    @else bg-gray-100 text-gray-800
                    @endif">
                    {{ ucfirst($invoice->status) }}
                </span>
            </div>
        </div>

        <form action="{{ route('finance.invoices.update', $invoice->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Customer</label>
                    <select name="user_id" required
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                        <option value="">Select Customer</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $invoice->user_id === $user->id ? 'selected' : '' }}>
                                {{ $user->first_name }} {{ $user->last_name }} ({{ $user->email }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Due Date</label>
                    <input type="date" name="due_date" value="{{ $invoice->due_date->format('Y-m-d') }}" required
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                    <select name="status" required
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                        <option value="pending" {{ $invoice->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="paid" {{ $invoice->status === 'paid' ? 'selected' : '' }}>Paid</option>
                        <option value="overdue" {{ $invoice->status === 'overdue' ? 'selected' : '' }}>Overdue</option>
                        <option value="cancelled" {{ $invoice->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
            </div>

            <!-- Invoice Items -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Invoice Items</label>
                <div class="bg-gray-50 rounded-xl p-4 space-y-2">
                    @foreach($invoice->items as $item)
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">{{ $item->description }}</p>
                                <p class="text-xs text-gray-500">{{ $item->quantity }} × ${{ number_format($item->unit_price, 2) }}</p>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">
                                ${{ number_format($item->total, 2) }}
                            </div>
                        </div>
                    @endforeach
                </div>
                <p class="text-xs text-gray-500 mt-2">Note: Invoice items cannot be edited after creation. Create a new invoice if needed.</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Notes</label>
                <textarea name="notes" rows="3" placeholder="Additional notes..."
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">{{ $invoice->notes ?? '' }}</textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                <a href="{{ route('finance.invoices') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>Update Invoice</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
