@extends('layouts.dashboard')

@section('dashboard-title', 'My Portfolio')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="bg-white p-20 rounded-[2rem] text-center border border-gray-100">
        <div class="w-20 h-20 bg-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-6 text-gray-300">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
        </div>
        <h3 class="text-xl font-black text-gray-900 mb-2">No Portfolio Companies</h3>
        <p class="text-gray-400 text-sm mb-8">You haven't added any startups to your portfolio yet.</p>
        <a href="{{ route('investor.pipeline') }}" class="px-8 py-4 bg-pink-600 text-white rounded-2xl font-black text-sm uppercase tracking-widest shadow-lg shadow-pink-100 hover:scale-105 transition inline-block">Explore Startups</a>
    </div>
</div>
@endsection
