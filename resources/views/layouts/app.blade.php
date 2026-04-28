<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            .prose h1 { @apply text-4xl font-bold text-gray-900 mb-6; }
            .prose h2 { @apply text-2xl font-bold text-gray-900 mt-10 mb-4; }
            .prose h3 { @apply text-lg font-semibold text-gray-900 mt-6 mb-3; }
            .prose p { @apply mb-4 leading-relaxed; }
            .prose ul { @apply list-disc pl-6 mb-6 space-y-2; }
            .prose strong { @apply font-bold text-gray-900; }
            .prose a { @apply text-emerald-600 hover:underline font-medium; }
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #ffffff; z-index: 9999; display: flex; align-items: center; justify-content: center;">
        <img src="{{ asset('Spinner@1x-3.0s-136px-136px.svg') }}" alt="Loading..." style="width: 80px; height: 80px;">
    </div>

    <div id="app">
        <main class="{{ request()->routeIs('landing') || request()->routeIs('login') || request()->routeIs('register') ? '' : 'py-4' }}">
            @yield('content')
        </main>
    </div>

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
