@extends('layouts.dashboard')

@section('dashboard-title', 'Add Expense')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Add New Expense</h2>
            <p class="text-sm text-gray-500">Record and categorize business expenses.</p>
        </div>
        <a href="{{ route('finance.expenses') }}" class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors">
            Back to Expenses
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

    <form action="{{ route('finance.expenses.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <input type="text" name="description" placeholder="e.g., Office Rent, Software License" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                <select name="category" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="">Select Category</option>
                    <option value="Office">Office</option>
                    <option value="Software">Software</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Travel">Travel</option>
                    <option value="Utilities">Utilities</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Professional Services">Professional Services</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Amount ($)</label>
                <input type="number" name="amount" placeholder="0.00" step="0.01" min="0" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Date</label>
                <input type="date" name="date" value="{{ date('Y-m-d') }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Receipt (Optional)</label>
            <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-emerald-500 transition-colors">
                <input type="file" name="receipt" accept=".pdf,.jpg,.jpeg,.png" class="hidden" id="receipt-input" onchange="handleFileSelect(this)">
                <label for="receipt-input" class="cursor-pointer">
                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="text-sm text-gray-600">Click to upload receipt</p>
                    <p class="text-xs text-gray-500 mt-1">PDF, JPG, JPEG, PNG up to 2MB</p>
                </label>
                <div id="file-preview" class="hidden mt-4">
                    <p class="text-sm font-medium text-emerald-600" id="file-name"></p>
                </div>
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Notes</label>
            <textarea name="notes" rows="3" placeholder="Additional notes about this expense..."
                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all"></textarea>
        </div>

        <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
            <a href="{{ route('finance.expenses') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>Add Expense</span>
            </button>
        </div>
    </form>
</div>

<script>
function handleFileSelect(input) {
    const file = input.files[0];
    const preview = document.getElementById('file-preview');
    const fileName = document.getElementById('file-name');
    
    if (file) {
        fileName.textContent = `Selected: ${file.name}`;
        preview.classList.remove('hidden');
    } else {
        preview.classList.add('hidden');
    }
}
</script>
@endsection
