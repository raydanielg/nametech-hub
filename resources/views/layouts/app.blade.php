<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'NAMTECH-HUB - Where Innovators Build the Future | Startup Incubator & Accelerator in Namibia')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- SEO Meta -->
    <meta name="description" content="NAMTECH-HUB - Where Innovators Build the Future. Premier startup incubator, accelerator, and innovation hub in Namibia. Transform your ideas into successful businesses with our comprehensive programs, mentorship, and funding opportunities.">
    <meta name="keywords" content="NAMTECH-HUB, startup incubator, startup accelerator, innovation hub, entrepreneurship, tech hub, Namibia, Windhoek, startup funding, business incubation, venture capital, mentorship programs, startup ecosystem, African startups, technology entrepreneurship, business development, startup programs, academy, launchpad, scale studio">
    <meta name="author" content="NAMTECH-HUB">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="NAMTECH-HUB - Where Innovators Build the Future | Startup Incubator & Accelerator in Namibia">
    <meta property="og:description" content="🚀 Transform your startup idea into reality at NAMTECH-HUB! Premier incubator & accelerator in Namibia offering mentorship, funding, and comprehensive programs for entrepreneurs. Join our innovation ecosystem today!">
    <meta property="og:image" content="{{ asset('icons/logo.svg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="NAMTECH-HUB Logo - Where Innovators Build the Future">
    <meta property="og:site_name" content="NAMTECH-HUB">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="NAMTECH-HUB - Where Innovators Build the Future | Startup Incubator & Accelerator">
    <meta property="twitter:description" content="🚀 Transform your startup idea into reality at NAMTECH-HUB! Premier incubator & accelerator in Namibia offering mentorship, funding, and comprehensive programs. Join our innovation ecosystem!">
    <meta property="twitter:image" content="{{ asset('icons/logo.svg') }}">
    <meta property="twitter:image:alt" content="NAMTECH-HUB Logo - Where Innovators Build the Future">
    <meta property="twitter:site" content="@namtechhub">
    <meta property="twitter:creator" content="@namtechhub">

    <!-- Favicon & Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('icons/logo.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('icons/logo.svg') }}">

    <!-- Social Media Icons (for structured data) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "NAMTECH-HUB",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('icons/logo.svg') }}",
      "sameAs": [
        "https://facebook.com/namtechhub",
        "https://twitter.com/namtechhub",
        "https://linkedin.com/company/namtechhub",
        "https://instagram.com/namtechhub",
        "https://youtube.com/@namtechhub",
        "https://github.com/namtechhub"
      ]
    }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
    <style>
        body { 
            padding-top: 90px; 
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            font-weight: 400;
            line-height: 1.6;
        }
        
        /* Consistent font weights and sizes */
        .display-1 { font-size: 5rem; font-weight: 800; }
        .display-2 { font-size: 4.5rem; font-weight: 800; }
        .display-3 { font-size: 4rem; font-weight: 700; }
        .display-4 { font-size: 3.5rem; font-weight: 700; }
        .display-5 { font-size: 3rem; font-weight: 600; }
        .display-6 { font-size: 2.5rem; font-weight: 600; }
        
        /* Enhanced text styling */
        .lead { font-weight: 500; font-size: 1.25rem; }
        .text-muted { opacity: 0.8; }
        
        /* Button styling consistency */
        .btn { 
            font-weight: 600; 
            font-family: 'Nunito', sans-serif;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .btn-lg { font-size: 1.125rem; padding: 0.75rem 2rem; }
        .btn-sm { font-size: 0.875rem; padding: 0.5rem 1rem; }
        
        /* Card styling */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.2s ease;
        }
        
        .card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }
        
        /* Custom color utilities */
        .text-success { color: #10b981 !important; }
        .bg-success { background-color: #10b981 !important; }
        .btn-success { background-color: #10b981; border-color: #10b981; }
        .btn-success:hover { background-color: #059669; border-color: #059669; }
        
        /* Gradient backgrounds */
        .bg-gradient-to-br {
            background: linear-gradient(135deg, var(--tw-gradient-from) 0%, var(--tw-gradient-to) 100%);
        }
        
        /* Custom animations */
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15);
        }
        
        /* Responsive typography */
        @media (max-width: 768px) {
            .display-1 { font-size: 3rem; }
            .display-2 { font-size: 2.5rem; }
            .display-3 { font-size: 2rem; }
            .display-4 { font-size: 1.75rem; }
            .display-5 { font-size: 1.5rem; }
            .display-6 { font-size: 1.25rem; }
        }
    </style>
</head>
<body>
    @include('landing.partials.header')

    <!-- Preloader -->
    <div id="preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #ffffff; z-index: 9999; display: flex; align-items: center; justify-content: center;">
        <img src="{{ asset('Spinner@1x-3.0s-136px-136px.svg') }}" alt="Loading..." style="width: 80px; height: 80px;">
    </div>

    <div id="app">
        <main class="{{ request()->routeIs('landing') || request()->routeIs('login') || request()->routeIs('register') ? '' : 'py-4' }}">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.transition = 'opacity 0.5s ease';
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        });
    </script>
</body>
</html>
