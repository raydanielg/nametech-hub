@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<div class="min-h-screen bg-gray-50 pt-20">
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Privacy Policy</h1>
            <p class="text-gray-500 mb-8">Last updated: {{ date('F d, Y') }}</p>

            <div class="prose prose-emerald max-w-none text-gray-600">
                <p class="text-lg leading-relaxed mb-6">
                    Thank you for choosing to be part of our community at NAMTECH-HUB ("Company," "we," "us," or "our"). 
                    We are committed to protecting your Personal Information and your right to privacy. If you have any 
                    questions or concerns about this Privacy Policy or our practices with regard to your Personal Information, 
                    please contact us at <a href="mailto:privacy@namtech-hub.com">privacy@namtech-hub.com</a>.
                </p>

                <p class="mb-6">
                    This Privacy Policy describes how we might use your information if you:
                </p>

                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Visit our website at <a href="{{ route('landing') }}">namtech-hub.com</a> or use any of our other Services</li>
                    <li>Engage with us in other related ways — including any sales, marketing, or events</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">1. WHAT PERSONAL INFORMATION DO WE COLLECT?</h2>
                
                <h3 class="text-lg font-semibold text-gray-900 mt-6 mb-3">Personal information you disclose to us</h3>
                <p class="mb-4"><strong>In Short:</strong> We collect personal information that you provide to us.</p>
                
                <p class="mb-4">
                    <strong>Registration Information.</strong> We collect Personal Information that you voluntarily provide to us 
                    when you register an account on the Website, such as your name, email address, phone number, information 
                    regarding your role and work, and password. If you sign up using another account, such as a social media 
                    account, we will also receive information from those services such as your name and email address.
                </p>

                <p class="mb-4">
                    <strong>Communications Information.</strong> We collect Personal Information when you use our Services or 
                    otherwise contact us, such as your name, email address, job titles, contact or authentication data, phone 
                    numbers, usernames, passwords, newsletter subscription status, and other similar information.
                </p>

                <h3 class="text-lg font-semibold text-gray-900 mt-6 mb-3">Information we collect when you use our Services</h3>
                <p class="mb-4"><strong>In Short:</strong> Some Personal Information is collected automatically when you use our Services.</p>
                
                <p class="mb-4">
                    We automatically collect certain information when you visit, use or navigate our Services. This information 
                    may include device, hardware, and usage information, such as your IP address, browser and device characteristics, 
                    operating system, language preferences, referring URLs, device name, country, location, information about how 
                    and when you use our Services and other technical information.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">2. HOW DO WE USE YOUR PERSONAL INFORMATION?</h2>
                <p class="mb-4"><strong>In Short:</strong> We may use your Personal Information for various purposes</p>
                
                <p class="mb-4">We use Personal Information collected via our Services for a variety of business purposes:</p>
                
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li><strong>To provide and maintain our Services</strong> — We use your information to provide our Service and troubleshoot technical issues.</li>
                    <li><strong>To facilitate account creation and logon process</strong> — We use your information to create and manage your account.</li>
                    <li><strong>To manage user accounts</strong> — We use your information for the purposes of managing your account and keeping it in working order.</li>
                    <li><strong>To send administrative information to you</strong> — We may send you product, service and new feature information.</li>
                    <li><strong>To protect our Services</strong> — We use your information as part of our efforts to keep our Services safe and secure.</li>
                    <li><strong>To respond to user inquiries/offer support to users</strong> — We use your information to respond to your inquiries and solve potential issues.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">3. WILL YOUR PERSONAL INFORMATION BE DISCLOSED TO ANYONE?</h2>
                <p class="mb-4"><strong>In Short:</strong> We only disclose Personal Information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.</p>
                
                <p class="mb-4">More specifically, we may process your data or disclose your personal information in the following situations:</p>
                
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li><strong>Business Transfers.</strong> We may disclose or transfer your information in connection with any merger, sale of company assets, financing, or acquisition.</li>
                    <li><strong>Vendors and Service Providers.</strong> We may disclose your information to third-party vendors, service providers, contractors or agents who perform services for us.</li>
                    <li><strong>As Required By Law.</strong> We may disclose your information where we are legally required to do so.</li>
                    <li><strong>Consent.</strong> We may disclose your information with your permission.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">4. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</h2>
                <p class="mb-4"><strong>In Short:</strong> We may use cookies and other tracking technologies to collect and store your information.</p>
                
                <p class="mb-4">
                    We may use cookies and similar tracking technologies to access or store Personal Information, including 
                    your browser type, operating system version, domains, IP address, the URL of the page that referred you, 
                    and information about your interactions with our Website.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">5. HOW LONG DO WE KEEP YOUR PERSONAL INFORMATION?</h2>
                <p class="mb-4"><strong>In Short:</strong> We keep your Personal Information for as long as necessary to fulfill the purposes outlined in this Privacy Policy unless otherwise required by law.</p>
                
                <p class="mb-4">
                    We will only keep your Personal Information for as long as it is necessary for the purposes set out in this 
                    Privacy Policy, unless a longer retention period is required or permitted by law.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">6. HOW DO WE KEEP YOUR PERSONAL INFORMATION SAFE?</h2>
                <p class="mb-4"><strong>In Short:</strong> We aim to protect your Personal Information through a system of organizational and technical security measures.</p>
                
                <p class="mb-4">
                    We have implemented appropriate technical and organizational security measures designed to protect the 
                    security of any Personal Information we process. However, despite our safeguards, no electronic transmission 
                    over the Internet or information storage technology can be guaranteed to be 100% secure.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">7. WHAT ARE YOUR PRIVACY RIGHTS?</h2>
                <p class="mb-4"><strong>In Short:</strong> You have certain rights under applicable data protection laws.</p>
                
                <p class="mb-4">
                    In some regions (like the European Economic Area), you have certain rights under applicable data protection laws. 
                    These may include the right (i) to request access and obtain a copy of your personal information, (ii) to 
                    request rectification or erasure; (iii) to restrict the processing of your personal information; and (iv) 
                    if applicable, to data portability.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">8. DO WE MAKE UPDATES TO THIS NOTICE?</h2>
                <p class="mb-4"><strong>In Short:</strong> Yes, we will update this notice as necessary to stay compliant with relevant laws.</p>
                
                <p class="mb-4">
                    We may update this Privacy Policy from time to time. The updated version will be indicated by an updated 
                    "Revised" date and the updated version will be effective as soon as it is accessible.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">9. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</h2>
                <p class="mb-4">
                    If you have questions or comments about this notice, you may email us at 
                    <a href="mailto:privacy@namtech-hub.com">privacy@namtech-hub.com</a>.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">10. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</h2>
                <p class="mb-4">
                    Based on the applicable laws of your country, you may have the right to request access to the Personal 
                    Information we collect from you, change that information, or delete it. To request to review, update, 
                    or delete your Personal Information, please contact us.
                </p>
            </div>
        </div>
    </div>

    @include('landing.partials.footer')
</div>
@endsection
