@extends('layouts.dashboard')

@section('dashboard-title', 'Mentor Resources')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach(['Mentorship Guide', 'Startup Evaluation Framework', 'Pitch Deck Checklist'] as $resource)
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <h4 class="font-black text-gray-900 mb-2">{{ $resource }}</h4>
            <p class="text-xs text-gray-400 mb-6">Standard guide for mentors at NAMTECH HUB.</p>
            <button class="w-full py-3 bg-pink-600 text-white rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-pink-100 hover:scale-105 transition">Download PDF</button>
        </div>
        @endforeach
    </div>
</div>
@endsection
