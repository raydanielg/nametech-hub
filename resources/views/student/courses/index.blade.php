@extends('layouts.dashboard')

@section('dashboard-title', 'Academy Courses')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($courses as $course)
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex flex-col">
            <div class="w-full h-32 bg-gray-50 rounded-2xl mb-4 overflow-hidden relative">
                <div class="absolute inset-0 flex items-center justify-center font-black text-gray-200 text-3xl uppercase tracking-tighter">NAMTECH</div>
            </div>
            <h4 class="font-black text-gray-900 mb-1">{{ $course->title }}</h4>
            <p class="text-[10px] text-pink-600 font-bold uppercase tracking-widest mb-4">Duration: {{ $course->duration ?? '4 Weeks' }}</p>
            <p class="text-xs text-gray-400 line-clamp-2 mb-6">{{ $course->description }}</p>
            
            <button class="mt-auto w-full py-3 bg-pink-600 text-white rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-pink-100 hover:scale-105 transition">Enroll Now</button>
        </div>
        @empty
        <div class="col-span-full bg-white p-20 rounded-[2rem] text-center border border-gray-100">
            <p class="text-gray-400 text-sm italic">No courses available at the moment.</p>
        </div>
        @endforelse
    </div>
    @if($courses->hasPages())
    <div class="bg-white p-6 rounded-[2rem] border border-gray-100">{{ $courses->links() }}</div>
    @endif
</div>
@endsection
