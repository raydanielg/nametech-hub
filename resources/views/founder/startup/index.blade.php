@extends('layouts.dashboard')

@section('dashboard-title', 'My Startup Profile')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    @if($startup)
    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
            <div class="w-32 h-32 bg-pink-50 text-pink-600 rounded-3xl flex items-center justify-center font-black text-4xl shadow-inner">
                {{ substr($startup->name, 0, 1) }}
            </div>
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-3xl font-black text-gray-900 mb-2">{{ $startup->name }}</h2>
                <div class="flex flex-wrap justify-center md:justify-start gap-2 mb-4">
                    <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $startup->program_type ?? 'Accelerator' }}</span>
                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $startup->cohort->name ?? 'Cohort N/A' }}</span>
                    <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $startup->status ?? 'Active' }}</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed max-w-2xl">{{ $startup->description ?? 'No description available for this startup.' }}</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12 pt-12 border-t border-gray-50">
            <div>
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-2">Industry</p>
                <p class="font-bold text-gray-800">{{ $startup->industry ?? 'Technology' }}</p>
            </div>
            <div>
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-2">Website</p>
                <a href="{{ $startup->website ?? '#' }}" class="font-bold text-pink-600 hover:underline" target="_blank">{{ $startup->website ?? 'Not set' }}</a>
            </div>
            <div>
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-2">Funding Status</p>
                <p class="font-bold text-gray-800">{{ $startup->funding_status ?? 'Bootstrapped' }}</p>
            </div>
        </div>
    </div>
    @else
    <div class="bg-white p-20 rounded-[2rem] text-center border border-gray-100">
        <div class="w-20 h-20 bg-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-6 text-gray-300">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
        </div>
        <h3 class="text-xl font-black text-gray-900 mb-2">No Startup Profile Found</h3>
        <p class="text-gray-400 text-sm mb-8">You haven't registered your startup or joined a program yet.</p>
        <button class="px-8 py-4 bg-pink-600 text-white rounded-2xl font-black text-sm uppercase tracking-widest shadow-lg shadow-pink-200 hover:scale-105 transition">Register Now</button>
    </div>
    @endif
</div>
@endsection
