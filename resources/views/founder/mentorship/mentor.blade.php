@extends('layouts.dashboard')

@section('dashboard-title', 'My Mentor')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    @if($mentor)
    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8">
            <div class="w-40 h-40 rounded-3xl overflow-hidden border-4 border-gray-50 shadow-lg">
                <img src="{{ $mentor->profile_picture_url ?? 'https://ui-avatars.com/api/?name='.urlencode($mentor->first_name.' '.$mentor->last_name).'&background=fdf2f8&color=db2777&size=200&bold=true' }}" 
                     alt="{{ $mentor->first_name }}" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 text-center md:text-left">
                <p class="text-pink-600 text-[10px] font-black uppercase tracking-[0.2em] mb-2">Dedicated Mentor</p>
                <h2 class="text-3xl font-black text-gray-900 mb-2">{{ $mentor->first_name }} {{ $mentor->last_name }}</h2>
                <p class="text-gray-500 font-bold mb-6 italic">{{ $mentor->job_title ?? 'Expert Advisor' }} @ {{ $mentor->company ?? 'NAMTECH HUB' }}</p>
                
                <div class="flex flex-wrap justify-center md:justify-start gap-4">
                    <button class="px-6 py-3 bg-pink-600 text-white rounded-2xl font-black text-xs uppercase tracking-widest shadow-lg shadow-pink-200 hover:scale-105 transition">Book Session</button>
                    <button class="px-6 py-3 bg-white text-gray-700 border border-gray-100 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gray-50 transition">Send Message</button>
                </div>
            </div>
        </div>
        
        <div class="mt-12 pt-12 border-t border-gray-50">
            <h3 class="text-lg font-black text-gray-900 mb-4">Areas of Expertise</h3>
            <div class="flex flex-wrap gap-2">
                @foreach($mentor->skills ?? ['Business Strategy', 'Product Design', 'Fundraising', 'Growth Hacking'] as $skill)
                <span class="px-4 py-2 bg-gray-50 text-gray-600 rounded-xl text-xs font-bold">{{ $skill }}</span>
                @endforeach
            </div>
            
            <h3 class="text-lg font-black text-gray-900 mt-8 mb-4">Biography</h3>
            <p class="text-gray-500 text-sm leading-relaxed">{{ $mentor->bio ?? 'A passionate mentor dedicated to helping startups achieve their full potential through strategic guidance and industry insights.' }}</p>
        </div>
    </div>
    @else
    <div class="bg-white p-20 rounded-[2rem] text-center border border-gray-100">
        <div class="w-20 h-20 bg-pink-50 rounded-3xl flex items-center justify-center mx-auto mb-6 text-pink-300">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        </div>
        <h3 class="text-xl font-black text-gray-900 mb-2">Mentor Not Assigned</h3>
        <p class="text-gray-400 text-sm mb-8">We are matching you with the best mentor based on your startup's needs.</p>
        <button class="px-8 py-4 bg-gray-50 text-gray-400 rounded-2xl font-black text-sm uppercase tracking-widest cursor-not-allowed">Matching in Progress...</button>
    </div>
    @endif
</div>
@endsection
