@extends('layouts.dashboard')

@section('dashboard-title', 'Hub Members')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/50 text-gray-400 text-[10px] font-black uppercase tracking-widest border-b border-gray-50">
                    <tr>
                        <th class="px-8 py-5">Member</th>
                        <th class="px-8 py-5">Role</th>
                        <th class="px-8 py-5">Email</th>
                        <th class="px-8 py-5">Joined</th>
                        <th class="px-8 py-5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($members as $member)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-5">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-pink-50 text-pink-600 rounded-xl flex items-center justify-center font-bold">{{ substr($member->first_name, 0, 1) }}</div>
                                <span class="text-sm font-bold text-gray-800">{{ $member->first_name }} {{ $member->last_name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5">
                            @foreach($member->roles as $role)
                                <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-[10px] font-black uppercase">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $member->email }}</td>
                        <td class="px-8 py-5 text-sm text-gray-400">{{ $member->created_at?->format('M d, Y') }}</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-{{ $member->status === 'active' ? 'green' : 'gray' }}-50 text-{{ $member->status === 'active' ? 'green' : 'gray' }}-600 rounded-full text-[10px] font-black uppercase">{{ $member->status }}</span>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">No members found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($members->hasPages())
        <div class="px-8 py-6 bg-gray-50/30 border-t border-gray-50">{{ $members->links() }}</div>
        @endif
    </div>
</div>
@endsection
