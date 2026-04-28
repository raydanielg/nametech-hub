@extends('layouts.dashboard')

@section('dashboard-title', 'Stripe Dashboard')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Stripe Dashboard</h2>
            <p class="text-sm text-gray-500">Manage Stripe integration and payment processing.</p>
        </div>
        <div class="flex gap-3">
            <form action="{{ route('finance.stripe.sync') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    <span>Sync Data</span>
                </button>
            </form>
            <a href="{{ route('finance.stripe.webhooks') }}" class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Webhooks</span>
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Connection Status -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-bold text-gray-900">Connection Status</h3>
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                <span class="text-sm font-medium text-emerald-600">Connected</span>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Stripe Account ID</label>
                <div class="px-4 py-2.5 bg-gray-50 rounded-xl text-sm text-gray-600 font-mono">acct_1Hk7Xz2e3v4j5k6l</div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Account Type</label>
                <div class="px-4 py-2.5 bg-gray-50 rounded-xl text-sm text-gray-600">Standard</div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Country</label>
                <div class="px-4 py-2.5 bg-gray-50 rounded-xl text-sm text-gray-600">United States (US)</div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Currency</label>
                <div class="px-4 py-2.5 bg-gray-50 rounded-xl text-sm text-gray-600">USD</div>
            </div>
        </div>
    </div>

    <!-- Stripe Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Total Revenue</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">${{ number_format($stats['total_revenue']) }}</p>
                    <p class="text-xs text-emerald-600 mt-2">Via Stripe</p>
                </div>
                <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Transactions</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">1,247</p>
                    <p class="text-xs text-emerald-600 mt-2">This month</p>
                </div>
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Success Rate</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">98.5%</p>
                    <p class="text-xs text-emerald-600 mt-2">Last 30 days</p>
                </div>
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Webhooks</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $stats['webhooks'] }}</p>
                    <p class="text-xs text-emerald-600 mt-2">Active</p>
                </div>
                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold text-gray-900">Recent Stripe Transactions</h3>
                <a href="https://dashboard.stripe.com/payments" target="_blank" class="text-sm text-emerald-600 hover:text-emerald-700 font-medium">
                    View in Stripe →
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50 border-b border-gray-100">
                    <tr>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Transaction ID</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Customer</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Amount</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Status</th>
                        <th class="text-left py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Date</th>
                        <th class="text-right py-3 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php
                    $transactions = [
                        ['id' => 'pi_1Hk7Xz2e3v4j5k6l', 'customer' => 'John Smith', 'amount' => 299.00, 'status' => 'succeeded', 'date' => '2024-01-15 14:23:45'],
                        ['id' => 'pi_2Jl8Yz3f4w5k6l7m', 'customer' => 'Sarah Johnson', 'amount' => 599.00, 'status' => 'succeeded', 'date' => '2024-01-15 13:45:22'],
                        ['id' => 'pi_3Km9Za4g5x6l7m8n', 'customer' => 'Mike Davis', 'amount' => 199.00, 'status' => 'failed', 'date' => '2024-01-15 12:30:15'],
                        ['id' => 'pi_4Ln0Ab5h6y7m8n9o', 'customer' => 'Anna Wilson', 'amount' => 799.00, 'status' => 'succeeded', 'date' => '2024-01-15 11:15:30'],
                        ['id' => 'pi_5Mo1Bc6i7z8n9o0p', 'customer' => 'David Brown', 'amount' => 399.00, 'status' => 'pending', 'date' => '2024-01-15 10:45:10'],
                    ];
                    @endphp
                    @foreach($transactions as $transaction)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="py-3 px-6">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-sm font-medium text-gray-900 font-mono">{{ substr($transaction['id'], 0, 20) }}...</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-sm text-gray-600">{{ $transaction['customer'] }}</td>
                        <td class="py-3 px-6 text-sm font-semibold text-gray-900">${{ number_format($transaction['amount'], 2) }}</td>
                        <td class="py-3 px-6">
                            @if($transaction['status'] === 'succeeded')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    Succeeded
                                </span>
                            @elseif($transaction['status'] === 'failed')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Failed
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    Pending
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-6 text-sm text-gray-500">{{ \Carbon\Carbon::parse($transaction['date'])->format('M d, Y H:i') }}</td>
                        <td class="py-3 px-6 text-right">
                            <a href="https://dashboard.stripe.com/payments/{{ $transaction['id'] }}" target="_blank" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                View →
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- API Keys Section -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-bold text-gray-900">API Keys</h3>
            <button onclick="toggleApiKeys()" class="text-sm text-emerald-600 hover:text-emerald-700 font-medium">
                Show Keys
            </button>
        </div>
        
        <div id="api-keys" class="hidden space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Publishable Key</label>
                    <div class="relative">
                        <input type="password" value="pk_test_51234567890abcdef" readonly class="w-full px-4 py-2.5 pr-10 bg-gray-50 rounded-xl text-sm text-gray-600 font-mono">
                        <button onclick="toggleVisibility(this)" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Secret Key</label>
                    <div class="relative">
                        <input type="password" value="sk_test_51234567890abcdef" readonly class="w-full px-4 py-2.5 pr-10 bg-gray-50 rounded-xl text-sm text-gray-600 font-mono">
                        <button onclick="toggleVisibility(this)" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4">
                <div class="flex items-start space-x-3">
                    <svg class="w-5 h-5 text-amber-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.314 16.5c-.77.833.192 2.5 1.732 2.5z"></path></svg>
                    <div>
                        <p class="text-sm font-medium text-amber-800">Security Notice</p>
                        <p class="text-xs text-amber-700 mt-1">Never share your secret API keys or expose them in client-side code.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleApiKeys() {
    const apiKeys = document.getElementById('api-keys');
    const button = event.target;
    
    if (apiKeys.classList.contains('hidden')) {
        apiKeys.classList.remove('hidden');
        button.textContent = 'Hide Keys';
    } else {
        apiKeys.classList.add('hidden');
        button.textContent = 'Show Keys';
    }
}

function toggleVisibility(button) {
    const input = button.previousElementSibling;
    if (input.type === 'password') {
        input.type = 'text';
        button.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>';
    } else {
        input.type = 'password';
        button.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>';
    }
}
</script>
@endsection