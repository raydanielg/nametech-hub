@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<div class="min-h-screen bg-white pt-20">
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="p-0">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Terms of Service</h1>
            <p class="text-gray-500 mb-8 border-b pb-8">Last updated: {{ date('F d, Y') }}</p>

            <div class="prose prose-emerald max-w-none text-gray-600">
                <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">1. AGREEMENT TO TERMS</h2>
                <p class="mb-4">
                    These Terms of Service constitute a legally binding agreement made between you and NAMTECH-HUB ("Company," "we," "us," or "our"), 
                    concerning your access to and use of the <a href="{{ route('landing') }}">namtech-hub.com</a> website as well as any other media form, 
                    media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the "Site").
                </p>
                <p class="mb-4">
                    You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms of Service. 
                    If you do not agree with all of these Terms of Service, then you are expressly prohibited from using the Site and you 
                    must discontinue use immediately.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">2. INTELLECTUAL PROPERTY RIGHTS</h2>
                <p class="mb-4">
                    Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, 
                    website designs, audio, video, text, photographs, and graphics on the Site (collectively, the "Content") and the 
                    trademarks, service marks, and logos contained therein (the "Marks") are owned or controlled by us or licensed to us, 
                    and are protected by copyright and trademark laws.
                </p>
                <p class="mb-4">
                    Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and 
                    to download or print a copy of any portion of the Content to which you have properly gained access solely for your 
                    personal, non-commercial use.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">3. USER REPRESENTATIONS</h2>
                <p class="mb-4">
                    By using the Site, you represent and warrant that: (1) all registration information you submit will be true, accurate, 
                    current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration 
                    information as necessary; (3) you have the legal capacity and you agree to comply with these Terms of Service; 
                    (4) you are not a minor in the jurisdiction in which you reside.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">4. USER REGISTRATION</h2>
                <p class="mb-4">
                    You may be required to register with the Site. You agree to keep your password confidential and will be responsible 
                    for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select 
                    if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">5. PROHIBITED ACTIVITIES</h2>
                <p class="mb-4">
                    You may not access or use the Site for any purpose other than that for which we make the Site available. The Site 
                    may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved 
                    by us.
                </p>
                <p class="mb-4">As a user of the Site, you agree not to:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.</li>
                    <li>Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords.</li>
                    <li>Circumvent, disable, or otherwise interfere with security-related features of the Site.</li>
                    <li>Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site.</li>
                    <li>Use any information obtained from the Site in order to harass, abuse, or harm another person.</li>
                    <li>Make improper use of our support services or submit false reports of abuse or misconduct.</li>
                    <li>Use the Site in a manner inconsistent with any applicable laws or regulations.</li>
                    <li>Engage in unauthorized framing of or linking to the Site.</li>
                    <li>Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material that interferes with any party's uninterrupted use and enjoyment of the Site.</li>
                    <li>Attempt to bypass any measures of the Site designed to prevent or restrict access to the Site.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">6. USER GENERATED CONTRIBUTIONS</h2>
                <p class="mb-4">
                    The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other 
                    functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, 
                    distribute, or broadcast content and materials to us or on the Site.
                </p>
                <p class="mb-4">
                    By posting your Contributions to any part of the Site, you automatically grant, and you represent and warrant that 
                    you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, 
                    royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, 
                    publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, 
                    transmit, excerpt, and distribute such Contributions.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">7. SUBMISSIONS</h2>
                <p class="mb-4">
                    You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding 
                    the Site ("Submissions") provided by you to us are non-confidential and shall become our sole property. We shall 
                    own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and 
                    dissemination of these Submissions for any lawful purpose, commercial or otherwise, without acknowledgment or 
                    compensation to you.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">8. SITE MANAGEMENT</h2>
                <p class="mb-4">
                    We reserve the right, but not the obligation, to: (1) monitor the Site for violations of these Terms of Service; 
                    (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Terms of Service; 
                    (3) refuse, restrict access to, limit the availability of, or disable any of your Contributions or any portion thereof; 
                    (4) remove from the Site or otherwise disable all files and content that are excessive in size or are in any way 
                    burdensome to our systems.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">9. TERM AND TERMINATION</h2>
                <p class="mb-4">
                    These Terms of Service shall remain in full force and effect while you use the Site. Without limiting any other 
                    provision of these Terms of Service, we reserve the right to, in our sole discretion and without notice or liability, 
                    deny access to and use of the Site (including blocking certain IP addresses), to any person for any reason or for 
                    no reason, including without limitation for breach of any representation, warranty, or covenant contained in these 
                    Terms of Service or any applicable law or regulation.
                </p>
                <p class="mb-4">
                    We may terminate your use or participation in the Site or delete any of your Contributions, for any reason, 
                    including without limitation if, at our sole discretion: (1) we determine that you have violated these Terms of Service; 
                    (2) we determine that you are a repeat infringer of third-party rights; (3) we determine that your use of the Site 
                    creates risk for us, other users, or third parties.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">10. MODIFICATIONS AND INTERRUPTIONS</h2>
                <p class="mb-4">
                    We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole 
                    discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the 
                    right to modify or discontinue all or part of the Site without notice at any time.
                </p>
                <p class="mb-4">
                    We cannot guarantee the Site will be available at all times. We may experience hardware, software, or other problems 
                    or need to perform maintenance related to the Site, resulting in interruptions, delays, or errors. We reserve the 
                    right to change, revise, update, suspend, discontinue, or otherwise modify the Site for any reason without notice 
                    to you.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">11. GOVERNING LAW</h2>
                <p class="mb-4">
                    These Terms of Service and your use of the Site are governed by and construed in accordance with the laws of Tanzania 
                    applicable to agreements made and to be entirely performed within Tanzania, without regard to its conflict of law 
                    principles.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">12. DISPUTE RESOLUTION</h2>
                <p class="mb-4">
                    Any legal action of whatever nature brought by either you or us shall be commenced or prosecuted in the state and 
                    federal courts located in Dar es Salaam, Tanzania, and you hereby consent to, and waive all defenses of lack of 
                    personal jurisdiction and forum non conveniens with respect to venue and jurisdiction in such state and federal courts.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">13. CORRECTIONS</h2>
                <p class="mb-4">
                    There may be information on the Site that contains typographical errors, inaccuracies, or omissions, including 
                    descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, 
                    inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">14. DISCLAIMER</h2>
                <p class="mb-4">
                    THE SITE IS PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SITE AND OUR SERVICES WILL BE 
                    AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN 
                    CONNECTION WITH THE SITE AND YOUR USE THEREOF.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">15. LIMITATIONS OF LIABILITY</h2>
                <p class="mb-4">
                    IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, 
                    INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, 
                    LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY 
                    OF SUCH DAMAGES.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">16. INDEMNIFICATION</h2>
                <p class="mb-4">
                    You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective 
                    officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including 
                    reasonable attorneys' fees and expenses, made by any third party due to or arising out of: (1) your Contributions; 
                    (2) use of the Site; (3) breach of these Terms of Service; (4) any breach of your representations and warranties 
                    set forth in these Terms of Service; (5) your violation of the rights of a third party.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">17. CONTACT US</h2>
                <p class="mb-4">
                    In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, 
                    please contact us at:
                </p>
                <div class="bg-gray-50 rounded-lg p-6 mt-4">
                    <p class="font-semibold text-gray-900 mb-2">NAMTECH-HUB</p>
                    <p class="text-gray-600">Dar es Salaam, Tanzania</p>
                    <p class="text-gray-600">Email: <a href="mailto:legal@namtech-hub.com">legal@namtech-hub.com</a></p>
                </div>
            </div>
        </div>
    </div>

    @include('landing.partials.footer')
</div>
@endsection
