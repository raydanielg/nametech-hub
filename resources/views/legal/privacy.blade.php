@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<style>
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
        <h1 class="text-6xl font-medium text-gray-900 tracking-tight">Privacy Policy</h1>
    </div>

    <!-- Main Content on White Background -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-32 -mt-10 relative z-10">
        <div class="bg-white p-12 md:p-20 shadow-sm border border-gray-100 rounded-sm">
            <div class="prose prose-lg prose-emerald max-w-none text-gray-800">
                <p class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-4">PRIVACY POLICY</p>
                <p class="text-sm text-gray-500 mb-10">Last updated: October 21, 2025</p>

                <p class="mb-8 leading-relaxed">
                    Thank you for choosing to be part of our community at NAMTECH-HUB ("Company," "we," "us," or "our"). 
                    We are committed to protecting your Personal Information and your right to privacy. If you have any 
                    questions or concerns about this Privacy Policy or our practices with regard to your Personal Information, 
                    please contact us at <a href="mailto:privacy@namtech-hub.com" class="text-emerald-600 hover:underline">privacy@namtech-hub.com</a>.
                </p>

                <p class="mb-8">
                    This Privacy Policy describes how we might use your information if you:
                </p>

                <ul class="list-disc pl-6 mb-8 space-y-3">
                    <li>Visit our website at <a href="{{ route('landing') }}" class="text-emerald-600 hover:underline">namtech-hub.com</a> or use any of our other Services</li>
                    <li>Engage with us in other related ways — including any sales, marketing, or events</li>
                </ul>

                <p class="mb-10 leading-relaxed">
                    In this Privacy Policy, if we refer to:
                </p>

                <ul class="list-none pl-0 mb-10 space-y-4">
                    <li><strong>"Personal Information,"</strong> we are referring to information that alone or in combination with other information in our possession could be used to identify you</li>
                    <li><strong>"Website,"</strong> we are referring to any website of ours that references or links to this policy, including <a href="{{ route('landing') }}" class="text-emerald-600 hover:underline">www.namtech-hub.com</a></li>
                </ul>

                <p class="mb-10 leading-relaxed font-medium">
                    The purpose of this Privacy Policy is to explain to you in the clearest way possible what Personal Information we collect, how we use it, and what rights you have in relation to it. If there are any terms in this Privacy Policy that you do not agree with, please discontinue use of our Services immediately.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">1. WHAT PERSONAL INFORMATION DO WE COLLECT?</h2>
                
                <h3 class="text-lg font-semibold text-gray-900 mt-10 mb-4">Personal information you disclose to us</h3>
                <p class="mb-6 italic">In Short: We collect personal information that you provide to us.</p>
                
                <p class="mb-6 leading-relaxed">
                    <strong>Registration Information.</strong> We collect Personal Information that you voluntarily provide to us 
                    when you register an account on the Website, such as your name, email address, phone number, information 
                    regarding your role and work, and password. If you sign up using another account, such as a social media 
                    account, we will also receive information from those services such as your name and email address.
                </p>

                <p class="mb-10 leading-relaxed">
                    <strong>Communications Information.</strong> We collect Personal Information when you use our Services or 
                    otherwise contact us, such as your name, email address, job titles, contact or authentication data, phone 
                    numbers, usernames, passwords, newsletter subscription status, and other similar information.
                </p>

                <h3 class="text-lg font-semibold text-gray-900 mt-10 mb-4">Information we collect when you use our Services</h3>
                <p class="mb-6 italic">In Short: Some Personal Information is collected automatically when you use our Services.</p>
                
                <p class="mb-10 leading-relaxed">
                    We automatically collect certain information when you visit, use or navigate our Services. This information 
                    may include device, hardware, and usage information, such as your IP address, browser and device characteristics, 
                    operating system, language preferences, referring URLs, device name, country, location, information about how 
                    and when you use our Services and other technical information.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">2. HOW DO WE USE YOUR PERSONAL INFORMATION?</h2>
                <p class="mb-6 italic">In Short: We may use your Personal Information for various purposes</p>
                
                <p class="mb-6">We use Personal Information collected via our Services for a variety of business purposes:</p>
                
                <ul class="list-disc pl-6 mb-10 space-y-3">
                    <li><strong>To provide and maintain our Services</strong> — We use your information to provide our Service and troubleshoot technical issues.</li>
                    <li><strong>To facilitate account creation and logon process</strong> — We use your information to create and manage your account.</li>
                    <li><strong>To manage user accounts</strong> — We use your information for the purposes of managing your account and keeping it in working order.</li>
                    <li><strong>To send administrative information to you</strong> — We may send you product, service and new feature information.</li>
                    <li><strong>To protect our Services</strong> — We use your information as part of our efforts to keep our Services safe and secure.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">3. WILL YOUR PERSONAL INFORMATION BE DISCLOSED TO ANYONE?</h2>
                <p class="mb-10"><strong>In Short:</strong> We only disclose Personal Information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.</p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">4. HOW LONG DO WE KEEP YOUR PERSONAL INFORMATION?</h2>
                <p class="mb-10"><strong>In Short:</strong> We keep your Personal Information for as long as necessary to fulfill the purposes outlined in this Privacy Policy unless otherwise required by law.</p>

                <h2 class="text-2xl font-bold text-gray-900 mt-16 mb-6">5. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</h2>
                <p class="mb-6">
                    If you have questions or comments about this notice, you may email us at 
                    <a href="mailto:privacy@namtech-hub.com" class="text-emerald-600 hover:underline">privacy@namtech-hub.com</a>.
                </p>
            </div>
        </div>
    </div>

    @include('landing.partials.footer')
</div>
@endsection
