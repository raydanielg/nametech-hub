@extends('layouts.dashboard')

@section('dashboard-title', 'Roles & Permissions')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Roles & Permissions</h2>
            <p class="text-sm text-gray-500">Manage user roles and their access permissions.</p>
        </div>
        <button onclick="document.getElementById('create-role-modal').classList.remove('hidden')" class="px-4 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Create Role</span>
        </button>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-emerald-700 font-medium">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 flex items-center space-x-3">
            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            <span class="text-red-700 font-medium">{{ session('error') }}</span>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($roles as $role)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button onclick="editRole('{{ $role->id }}', '{{ $role->name }}')" class="p-2 text-gray-400 hover:text-emerald-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </button>
                        <form action="{{ route('admin.users.roles.destroy', $role->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-1">{{ ucwords(str_replace('_', ' ', $role->name)) }}</h3>
                <p class="text-sm text-gray-500 mb-4">{{ $role->users_count }} users assigned</p>

                <div class="flex flex-wrap gap-2">
                    @foreach($role->permissions->take(5) as $permission)
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs">{{ $permission->name }}</span>
                    @endforeach
                    @if($role->permissions->count() > 5)
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs">+{{ $role->permissions->count() - 5 }} more</span>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <p class="text-gray-500">No roles found.</p>
            </div>
        @endforelse
    </div>
</div>

<!-- Create Role Modal -->
<div id="create-role-modal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-6 max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-bold text-gray-900">Create New Role</h3>
            <button onclick="document.getElementById('create-role-modal').classList.add('hidden')" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <form action="{{ route('admin.users.roles.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Role Name</label>
                <input type="text" name="name" required placeholder="e.g., content_manager"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                <p class="text-xs text-gray-500 mt-1">Use lowercase with underscores</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Permissions</label>
                <div class="space-y-3 max-h-64 overflow-y-auto p-2 bg-gray-50 rounded-xl">
                    @foreach($permissions ?? [] as $group => $groupPermissions)
                        <div>
                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">{{ ucfirst($group) }}</h4>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($groupPermissions as $permission)
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-gray-700">{{ $permission->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="button" onclick="document.getElementById('create-role-modal').classList.add('hidden')" class="px-4 py-2 text-gray-600 hover:text-gray-800 font-medium">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors">Create Role</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Role Modal -->
<div id="edit-role-modal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-6 max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-bold text-gray-900">Edit Role</h3>
            <button onclick="document.getElementById('edit-role-modal').classList.add('hidden')" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <form id="edit-role-form" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Role Name</label>
                <input type="text" name="name" id="edit-role-name" required
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="button" onclick="document.getElementById('edit-role-modal').classList.add('hidden')" class="px-4 py-2 text-gray-600 hover:text-gray-800 font-medium">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<script>
    function editRole(id, name) {
        document.getElementById('edit-role-name').value = name;
        document.getElementById('edit-role-form').action = '/admin/users/roles/' + id;
        document.getElementById('edit-role-modal').classList.remove('hidden');
    }
</script>
@endsection
