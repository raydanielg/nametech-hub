@extends('layouts.dashboard')

@section('dashboard-title', 'Available Investors')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse($investors as $investor)
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-md transition text-center flex flex-col items-center">
            <div class="w-24 h-24 rounded-[2rem] overflow-hidden mb-4 shadow-inner">
                <img src="{{ $investor->profile_picture_url ?? 'https://ui-avatars.com/api/?name='.urlencode($investor->first_name.' '.$investor->last_name).'&background=fdf2f8&color=db2777&size=200&bold=true' }}" 
                     alt="{{ $investor->first_name }}" class="w-full h-full object-cover">
            </div>
            <h4 class="font-black text-gray-900 mb-1">{{ $investor->first_name }} {{ $investor->last_name }}</h4>
            <p class="text-[10px] font-black text-pink-600 uppercase tracking-widest mb-4">{{ $investor->investor_type ?? 'Angel Investor' }}</p>
            
            <div class="space-y-3 mb-6 w-full text-left bg-gray-50/50 p-4 rounded-2xl border border-gray-50">
                <div class="flex justify-between text-[10px]">
                    <span class="text-gray-400 font-bold uppercase">Focus</span>
                    <span class="text-gray-800 font-bold">{{ $investor->investment_focus ?? 'Tech, Fintech' }}</span>
                </div>
                <div class="flex justify-between text-[10px]">
                    <span class="text-gray-400 font-bold uppercase">Ticket Size</span>
                    <span class="text-gray-800 font-bold">{{ $investor->ticket_size ?? '$10k - $50k' }}</span>
                </div>
            </div>
            
            <button class="w-full py-3 bg-white text-gray-800 border border-gray-100 rounded-xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-50 transition">Connect</button>
        </div>
        @empty
        <div class="col-span-full bg-white p-20 rounded-[2rem] text-center border border-gray-100">
            <p class="text-gray-400 text-sm italic">No investors found in the network yet.</p>
        </div>
        @endforelse
    </div>
    
    @if($investors->hasPages())
    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">{{ $investors->links() }}</div>
    @endif
</div>
@endsection
