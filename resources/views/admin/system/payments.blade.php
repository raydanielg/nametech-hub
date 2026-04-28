@extends('layouts.dashboard')

@section('dashboard-title', 'Payment Settings')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Payment Settings</h2>
            <p class="text-sm text-gray-500">Configure payment gateways and currency options.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.system.payments.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Currency</label>
                <select name="currency" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="TZS" {{ ($settings['currency'] ?? 'TZS') === 'TZS' ? 'selected' : '' }}>TZS - Tanzanian Shilling</option>
                    <option value="USD" {{ ($settings['currency'] ?? '') === 'USD' ? 'selected' : '' }}>USD - US Dollar</option>
                    <option value="EUR" {{ ($settings['currency'] ?? '') === 'EUR' ? 'selected' : '' }}>EUR - Euro</option>
                    <option value="GBP" {{ ($settings['currency'] ?? '') === 'GBP' ? 'selected' : '' }}>GBP - British Pound</option>
                    <option value="KES" {{ ($settings['currency'] ?? '') === 'KES' ? 'selected' : '' }}>KES - Kenyan Shilling</option>
                    <option value="UGX" {{ ($settings['currency'] ?? '') === 'UGX' ? 'selected' : '' }}>UGX - Ugandan Shilling</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Currency Symbol</label>
                <input type="text" name="currency_symbol" value="{{ $settings['currency_symbol'] ?? 'TSh' }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>
        </div>

        <div class="border-t border-gray-100 pt-6">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Stripe Configuration</h3>
            
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h4 class="text-sm font-medium text-gray-700">Enable Stripe</h4>
                    <p class="text-xs text-gray-500">Accept payments via Stripe</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="stripe_enabled" value="1" class="sr-only peer" {{ ($settings['stripe_enabled'] ?? false) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                </label>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Stripe Public Key</label>
                    <input type="text" name="stripe_key" value="{{ $settings['stripe_key'] ?? '' }}" placeholder="pk_test_..."
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Stripe Secret Key</label>
                    <input type="password" name="stripe_secret" value="{{ $settings['stripe_secret'] ?? '' }}" placeholder="sk_test_..."
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                </div>
            </div>
        </div>

        <div class="border-t border-gray-100 pt-6">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">PayPal Configuration</h3>
            
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h4 class="text-sm font-medium text-gray-700">Enable PayPal</h4>
                    <p class="text-xs text-gray-500">Accept payments via PayPal</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="paypal_enabled" value="1" class="sr-only peer" {{ ($settings['paypal_enabled'] ?? false) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                </label>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">PayPal Client ID</label>
                    <input type="text" name="paypal_client_id" value="{{ $settings['paypal_client_id'] ?? '' }}"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">PayPal Secret</label>
                    <input type="password" name="paypal_secret" value="{{ $settings['paypal_secret'] ?? '' }}"
                        class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-4 border-t border-gray-100">
            <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>Save Settings</span>
            </button>
        </div>
    </form>
</div>
@endsection
