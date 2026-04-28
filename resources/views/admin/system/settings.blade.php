@extends('layouts.dashboard')

@section('dashboard-title', 'General Settings')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">General Settings</h2>
            <p class="text-sm text-gray-500">Manage your application general configuration.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.system.settings.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Application Name</label>
                <input type="text" name="app_name" value="{{ $settings['app_name'] ?? config('app.name') }}" 
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Application URL</label>
                <input type="url" name="app_url" value="{{ $settings['app_url'] ?? config('app.url') }}" 
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Timezone</label>
                <select name="timezone" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    @foreach(['UTC', 'Africa/Dar_es_Salaam', 'Africa/Nairobi', 'Europe/London', 'America/New_York'] as $tz)
                        <option value="{{ $tz }}" {{ ($settings['timezone'] ?? 'UTC') === $tz ? 'selected' : '' }}>{{ $tz }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Date Format</label>
                <select name="date_format" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="Y-m-d" {{ ($settings['date_format'] ?? 'Y-m-d') === 'Y-m-d' ? 'selected' : '' }}>YYYY-MM-DD</option>
                    <option value="d/m/Y" {{ ($settings['date_format'] ?? '') === 'd/m/Y' ? 'selected' : '' }}>DD/MM/YYYY</option>
                    <option value="m/d/Y" {{ ($settings['date_format'] ?? '') === 'm/d/Y' ? 'selected' : '' }}>MM/DD/YYYY</option>
                    <option value="d M Y" {{ ($settings['date_format'] ?? '') === 'd M Y' ? 'selected' : '' }}>DD Mon YYYY</option>
                </select>
            </div>
        </div>

        <div class="border-t border-gray-100 pt-6 space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-semibold text-gray-900">Maintenance Mode</h4>
                    <p class="text-xs text-gray-500">Put the application in maintenance mode</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="maintenance_mode" value="1" class="sr-only peer" {{ ($settings['maintenance_mode'] ?? false) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-semibold text-gray-900">Enable Registration</h4>
                    <p class="text-xs text-gray-500">Allow new users to register</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="enable_registration" value="1" class="sr-only peer" {{ ($settings['enable_registration'] ?? true) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                </label>
            </div>
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>Save Settings</span>
            </button>
        </div>
    </form>
</div>
@endsection
