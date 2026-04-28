@extends('layouts.dashboard')

@section('dashboard-title', 'Hub Settings')

@section('dashboard-content')
<div class="space-y-8 fade-in text-gray-900">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black">Hub Settings</h2>
            <p class="text-sm text-gray-500 font-medium">Configure global parameters and operation hours for the innovation hub.</p>
        </div>
        <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-emerald-100 transition-all flex items-center space-x-2 w-fit">
            <span>Save All Changes</span>
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Sidebar Navigation -->
        <div class="space-y-2">
            <a href="#" class="flex items-center space-x-3 p-4 bg-white border border-gray-100 rounded-2xl text-emerald-600 font-bold shadow-sm group">
                <div class="w-10 h-10 bg-emerald-50 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <span>General Config</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 hover:bg-[#E9E9EB] rounded-2xl text-gray-500 font-bold transition-all group">
                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-gray-100 group-hover:border-transparent transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <span>Operating Hours</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 hover:bg-[#E9E9EB] rounded-2xl text-gray-500 font-bold transition-all group">
                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-gray-100 group-hover:border-transparent transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <span>Pricing Plans</span>
            </a>
        </div>

        <!-- Settings Content -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-[#E9E9EB] p-8 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 shadow-sm">
                <h3 class="text-xl font-black mb-6">General Configuration</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Hub Name</label>
                            <input type="text" value="Namtech-hub" class="w-full bg-white/50 border-0 rounded-2xl px-6 py-4 text-sm font-bold focus:ring-2 focus:ring-emerald-500 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Contact Email</label>
                            <input type="email" value="hello@namtechhub.com" class="w-full bg-white/50 border-0 rounded-2xl px-6 py-4 text-sm font-bold focus:ring-2 focus:ring-emerald-500 transition-all">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Hub Address</label>
                        <textarea rows="3" class="w-full bg-white/50 border-0 rounded-2xl px-6 py-4 text-sm font-bold focus:ring-2 focus:ring-emerald-500 transition-all">Innovation Hub, 2nd Floor, Namtech Building, Dar es Salaam, Tanzania</textarea>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-white/30 rounded-2xl border border-white/50">
                        <div>
                            <p class="text-sm font-black text-gray-800 uppercase tracking-tight">Maintenance Mode</p>
                            <p class="text-[10px] text-gray-500 font-medium">Enable this to prevent public access during updates.</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                        </label>
                    </div>
                </form>
            </div>

            <div class="bg-[#E9E9EB] p-8 rounded-[2.5rem] border border-transparent hover:border-white transition-all duration-300 shadow-sm">
                <h3 class="text-xl font-black mb-6">Branding Assets</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Hub Logo</p>
                        <div class="w-full h-40 bg-white/50 rounded-[2rem] border-2 border-dashed border-gray-200 flex flex-col items-center justify-center space-y-2 cursor-pointer hover:bg-white transition-all">
                            <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Upload New Logo</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-2">Favicon</p>
                        <div class="w-full h-40 bg-white/50 rounded-[2rem] border-2 border-dashed border-gray-200 flex flex-col items-center justify-center space-y-2 cursor-pointer hover:bg-white transition-all">
                            <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Upload Favicon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
