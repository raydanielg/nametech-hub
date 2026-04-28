@extends('layouts.dashboard')

@section('dashboard-title', 'Add Invoice')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Add New Invoice</h2>
            <p class="text-sm text-gray-500">Create and send invoice to customer.</p>
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

    <form action="{{ route('finance.invoices.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Customer</label>
                <select name="user_id" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="">Select Customer</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }} ({{ $user->email }})</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Invoice Number</label>
                <input type="text" name="invoice_number" value="INV-{{ date('Y-m') }}-{{ str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT) }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Due Date</label>
                <input type="date" name="due_date" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Invoice Items</label>
            <div id="items-container" class="space-y-3">
                <div class="item-row grid grid-cols-12 gap-3">
                    <input type="text" name="items[0][description]" placeholder="Description" required
                        class="col-span-6 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <input type="number" name="items[0][quantity]" placeholder="Qty" min="1" value="1" required
                        class="col-span-2 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <input type="number" name="items[0][unit_price]" placeholder="Price" min="0" step="0.01" required
                        class="col-span-3 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <button type="button" onclick="removeItem(this)" class="col-span-1 p-2.5 text-red-600 hover:bg-red-50 rounded-xl transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
            <button type="button" onclick="addItem()" class="mt-3 px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                <span>Add Item</span>
            </button>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Notes</label>
            <textarea name="notes" rows="3" placeholder="Additional notes..."
                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all"></textarea>
        </div>

        <div class="flex justify-between items-center pt-4 border-t border-gray-100">
            <div class="text-lg font-semibold text-gray-900">
                Total: $<span id="total-amount">0.00</span>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('finance.invoices') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>Create Invoice</span>
                </button>
            </div>
        </div>
    </form>
</div>

<script>
let itemCount = 1;

function addItem() {
    const container = document.getElementById('items-container');
    const itemRow = document.createElement('div');
    itemRow.className = 'item-row grid grid-cols-12 gap-3';
    itemRow.innerHTML = `
        <input type="text" name="items[${itemCount}][description]" placeholder="Description" required
            class="col-span-6 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
        <input type="number" name="items[${itemCount}][quantity]" placeholder="Qty" min="1" value="1" required
            class="col-span-2 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
        <input type="number" name="items[${itemCount}][unit_price]" placeholder="Price" min="0" step="0.01" required
            class="col-span-3 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
        <button type="button" onclick="removeItem(this)" class="col-span-1 p-2.5 text-red-600 hover:bg-red-50 rounded-xl transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
        </button>
    `;
    container.appendChild(itemRow);
    itemCount++;
}

function removeItem(button) {
    const itemRow = button.closest('.item-row');
    if (document.querySelectorAll('.item-row').length > 1) {
        itemRow.remove();
        calculateTotal();
    }
}

function calculateTotal() {
    let total = 0;
    document.querySelectorAll('.item-row').forEach((row, index) => {
        const quantity = parseFloat(row.querySelector('input[name*="quantity"]').value) || 0;
        const price = parseFloat(row.querySelector('input[name*="unit_price"]').value) || 0;
        total += quantity * price;
    });
    document.getElementById('total-amount').textContent = total.toFixed(2);
}

document.addEventListener('input', function(e) {
    if (e.target.name.includes('quantity') || e.target.name.includes('unit_price')) {
        calculateTotal();
    }
});
</script>
@endsection
