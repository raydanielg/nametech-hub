@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<style>
    /* Ensure navbar is exactly like landing page */
    .navbar {
        background-color: #fff !important;
        border-bottom: 1px solid #dee2e6 !important;
        position: sticky !important;
        top: 0;
        z-index: 1020;
    }
    .prose h1, .prose h2, .prose h3 {
        color: #111;
    }
    .legal-content {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }
    /* Fixed beige background for the hero section to match Windsurf style */
    .hero-beige {
        background-color: #f0f0eb;
    }
</style>

<div class="legal-content min-h-screen bg-white">
    <!-- Hero Title Section with Beige Background -->
    <div class="hero-beige py-20 text-center">
        <h1 class="text-6xl font-medium text-gray-900 tracking-tight">Terms of Service</h1>
    </div>

    <!-- Main Content on White Background -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-32 -mt-10 relative z-10">
        <div class="bg-white p-12 md:p-20 shadow-sm border border-gray-100 rounded-sm">
            <div class="prose prose-lg prose-emerald max-w-none text-gray-800">
                <p class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-4">TERMS OF SERVICE</p>
                <p class="text-sm text-gray-500 mb-10">Last updated: October 21, 2025</p>

                <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">1. AGREEMENT TO TERMS</h2>
                <p class="mb-8 leading-relaxed">
                    These Terms of Service constitute a legally binding agreement made between you and NAMTECH-HUB ("Company," "we," "us," or "our"), 
                    concerning your access to and use of the <a href="{{ route('landing') }}" class="text-emerald-600 hover:underline">namtech-hub.com</a> website as well as any other media form, 
                    media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the "Site").
                </p>
                <p class="mb-10 leading-relaxed font-medium">
                    You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms of Service. 
                    If you do not agree with all of these Terms of Service, then you are expressly prohibited from using the Site and you 
                    must discontinue use immediately.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">2. INTELLECTUAL PROPERTY RIGHTS</h2>
                <p class="mb-8 leading-relaxed">
                    Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, 
                    website designs, audio, video, text, photographs, and graphics on the Site (collectively, the "Content") and the 
                    trademarks, service marks, and logos contained therein (the "Marks") are owned or controlled by us or licensed to us, 
                    and are protected by copyright and trademark laws.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">3. USER REPRESENTATIONS</h2>
                <p class="mb-8 leading-relaxed">
                    By using the Site, you represent and warrant that: (1) all registration information you submit will be true, accurate, 
                    current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration 
                    information as necessary; (3) you have the legal capacity and you agree to comply with these Terms of Service; 
                    (4) you are not a minor in the jurisdiction in which you reside.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">4. PROHIBITED ACTIVITIES</h2>
                <p class="mb-6">You may not access or use the Site for any purpose other than that for which we make the Site available. As a user of the Site, you agree not to:</p>
                <ul class="list-disc pl-6 mb-10 space-y-3">
                    <li>Systematically retrieve data or other content from the Site to create or compile a collection.</li>
                    <li>Trick, defraud, or mislead us and other users.</li>
                    <li>Circumvent, disable, or otherwise interfere with security-related features of the Site.</li>
                    <li>Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">5. CONTACT US</h2>
                <p class="mb-6 leading-relaxed">
                    In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, 
                    please contact us at:
                </p>
                <div class="bg-gray-50 rounded-lg p-8 border border-gray-100">
                    <p class="font-bold text-gray-900 mb-2">NAMTECH-HUB</p>
                    <p class="text-gray-600 mb-0 leading-relaxed">Dar es Salaam, Tanzania</p>
                    <p class="text-gray-600 mb-0">Email: <a href="mailto:legal@namtech-hub.com" class="text-emerald-600 hover:underline font-medium">legal@namtech-hub.com</a></p>
                </div>
            </div>
        </div>
    </div>

    @include('landing.partials.footer')
</div>
@endsection

@endsection
