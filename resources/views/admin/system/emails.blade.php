@extends('layouts.dashboard')

@section('dashboard-title', 'Email Settings')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Email Settings</h2>
            <p class="text-sm text-gray-500">Configure your email server and sending preferences.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.system.emails.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Mail Driver</label>
                <select name="mail_driver" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="smtp" {{ ($settings['mail_driver'] ?? 'smtp') === 'smtp' ? 'selected' : '' }}>SMTP</option>
                    <option value="sendmail" {{ ($settings['mail_driver'] ?? '') === 'sendmail' ? 'selected' : '' }}>Sendmail</option>
                    <option value="mailgun" {{ ($settings['mail_driver'] ?? '') === 'mailgun' ? 'selected' : '' }}>Mailgun</option>
                    <option value="postmark" {{ ($settings['mail_driver'] ?? '') === 'postmark' ? 'selected' : '' }}>Postmark</option>
                    <option value="ses" {{ ($settings['mail_driver'] ?? '') === 'ses' ? 'selected' : '' }}>Amazon SES</option>
                    <option value="log" {{ ($settings['mail_driver'] ?? '') === 'log' ? 'selected' : '' }}>Log (Testing)</option>
                    <option value="array" {{ ($settings['mail_driver'] ?? '') === 'array' ? 'selected' : '' }}>Array (Testing)</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Encryption</label>
                <select name="mail_encryption" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="tls" {{ ($settings['mail_encryption'] ?? 'tls') === 'tls' ? 'selected' : '' }}>TLS</option>
                    <option value="ssl" {{ ($settings['mail_encryption'] ?? '') === 'ssl' ? 'selected' : '' }}>SSL</option>
                    <option value="null" {{ ($settings['mail_encryption'] ?? '') === 'null' ? 'selected' : '' }}>None</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">SMTP Host</label>
                <input type="text" name="mail_host" value="{{ $settings['mail_host'] ?? '' }}" placeholder="smtp.mailgun.org"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">SMTP Port</label>
                <input type="number" name="mail_port" value="{{ $settings['mail_port'] ?? '' }}" placeholder="587"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                <input type="text" name="mail_username" value="{{ $settings['mail_username'] ?? '' }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                <input type="password" name="mail_password" value="{{ $settings['mail_password'] ?? '' }}" placeholder="••••••••"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">From Address</label>
                <input type="email" name="mail_from_address" value="{{ $settings['mail_from_address'] ?? '' }}" placeholder="noreply@namtech-hub.com"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">From Name</label>
                <input type="text" name="mail_from_name" value="{{ $settings['mail_from_name'] ?? '' }}" placeholder="Namtech Hub"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
            <button type="button" class="px-4 py-2.5 border border-gray-200 text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition-colors">
                Test Connection
            </button>
            <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>Save Settings</span>
            </button>
        </div>
    </form>
</div>
@endsection
