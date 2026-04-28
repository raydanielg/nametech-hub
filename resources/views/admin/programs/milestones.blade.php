@extends('layouts.dashboard')

@section('dashboard-title', 'Milestones')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Program Milestones</h2>
            <p class="text-sm text-gray-500 font-medium">Define and track critical progress points for startups across all hub programs.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>Create Milestone</span>
        </button>
    </div>

    <!-- Timeline of Milestones -->
    <div class="bg-[#E9E9EB] p-8 rounded-[3rem] shadow-sm relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-24 bg-emerald-600/5 blur-3xl -z-10"></div>
        
        <div class="space-y-12 relative before:absolute before:left-[19px] before:top-2 before:bottom-2 before:w-0.5 before:bg-emerald-200">
            @php
                $milestones_data = [
                    ['title' => 'Ideation & Validation', 'desc' => 'Market research and core concept validation.', 'program' => 'Launchpad', 'status' => 'Core'],
                    ['title' => 'MVP Development', 'desc' => 'Building the first functional version of the product.', 'program' => 'Launchpad', 'status' => 'Core'],
                    ['title' => 'First Customer Acquisition', 'desc' => 'Onboarding the first paying customer or 100 active users.', 'program' => 'Launchpad', 'status' => 'Critical'],
                    ['title' => 'Market Expansion', 'desc' => 'Scaling operations to new regions or segments.', 'program' => 'Scale', 'status' => 'Critical'],
                ];
            @endphp

            @foreach($milestones_data as $m)
            <div class="relative pl-12 group">
                <div class="absolute left-0 top-1 w-10 h-10 bg-white rounded-2xl border-4 border-[#E9E9EB] flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <div class="flex items-center space-x-3 mb-1">
                            <h3 class="text-lg font-black group-hover:text-emerald-600 transition-colors">{{ $m['title'] }}</h3>
                            <span class="px-3 py-1 bg-white rounded-lg text-[9px] font-black text-gray-400 uppercase tracking-widest border border-gray-100">{{ $m['program'] }}</span>
                        </div>
                        <p class="text-sm text-gray-500 font-medium italic">{{ $m['desc'] }}</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="px-4 py-1.5 {{ $m['status'] == 'Critical' ? 'bg-amber-100 text-amber-700' : 'bg-emerald-100 text-emerald-700' }} rounded-full text-[10px] font-black uppercase tracking-widest">{{ $m['status'] }}</span>
                        <button class="p-2 bg-white hover:bg-emerald-50 text-gray-400 hover:text-emerald-600 rounded-xl transition-all shadow-sm border border-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
