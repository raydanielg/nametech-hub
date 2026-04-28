@extends('layouts.dashboard')

@section('dashboard-title', 'Add New User')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center space-x-2 text-sm text-gray-500 mb-4">
        <a href="{{ route('admin.users.index') }}" class="hover:text-emerald-600">Users</a>
        <span>/</span>
        <span class="text-gray-900">Add New</span>
    </div>

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Add New User</h2>
            <p class="text-sm text-gray-500">Create a new user account and assign role.</p>
        </div>
    </div>

    <form action="{{ route('admin.users.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
        @csrf

        @if($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Optional"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                <p class="text-xs text-gray-500 mt-1">Minimum 8 characters</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Assign Role</label>
                <select name="role" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <option value="">Select a role...</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}" {{ old('role') === $role->name ? 'selected' : '' }}>
                            {{ ucwords(str_replace('_', ' ', $role->name)) }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
            <input type="checkbox" name="send_welcome_email" id="send_welcome" value="1" checked
                class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500">
            <label for="send_welcome" class="text-sm text-gray-700">Send welcome email to user</label>
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
            <a href="{{ route('admin.users.index') }}" class="px-4 py-2.5 text-gray-700 font-medium hover:text-gray-900 transition-colors">Cancel</a>
            <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                <span>Create User</span>
            </button>
        </div>
    </form>
</div>
@endsection
