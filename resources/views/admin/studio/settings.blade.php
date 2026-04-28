@extends('layouts.dashboard')

@section('dashboard-title', 'Studio Settings')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Studio Settings</h2>
            <p class="text-sm text-gray-500">Configure studio information and preferences.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.studio.settings.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Studio Name</label>
                <input type="text" name="studio_name" value="{{ $settings['studio_name'] }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Studio Email</label>
                <input type="email" name="studio_email" value="{{ $settings['studio_email'] }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                <input type="tel" name="studio_phone" value="{{ $settings['studio_phone'] }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Timezone</label>
                <select name="timezone" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="UTC" {{ $settings['timezone'] === 'UTC' ? 'selected' : '' }}>UTC</option>
                    <option value="Africa/Dar_es_Salaam" {{ $settings['timezone'] === 'Africa/Dar_es_Salaam' ? 'selected' : '' }}>Africa/Dar es Salaam</option>
                    <option value="Africa/Nairobi" {{ $settings['timezone'] === 'Africa/Nairobi' ? 'selected' : '' }}>Africa/Nairobi</option>
                    <option value="Europe/London" {{ $settings['timezone'] === 'Europe/London' ? 'selected' : '' }}>Europe/London</option>
                    <option value="America/New_York" {{ $settings['timezone'] === 'America/New_York' ? 'selected' : '' }}>America/New York</option>
                </select>
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Studio Address</label>
            <textarea name="studio_address" rows="3" required
                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">{{ $settings['studio_address'] }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Default Hourly Rate ($)</label>
                <input type="number" name="default_hourly_rate" value="{{ $settings['default_hourly_rate'] }}" step="0.01" min="0" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Working Hours</label>
                <input type="text" name="working_hours" value="{{ $settings['working_hours'] }}" placeholder="e.g., 9:00 - 17:00" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>
        </div>

        <div class="border-t border-gray-100 pt-6">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Studio Preferences</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-medium text-gray-700">Auto-assign Projects</h4>
                        <p class="text-xs text-gray-500">Automatically assign developers based on availability</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="auto_assign" value="1" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-medium text-gray-700">Weekly Reports</h4>
                        <p class="text-xs text-gray-500">Send weekly progress reports to clients</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="weekly_reports" value="1" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                    </label>
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