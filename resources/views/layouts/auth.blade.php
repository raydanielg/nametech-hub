<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Login - NAMTECH-HUB')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon & Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('icons/logo.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('icons/logo.svg') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
    <style>
        body { 
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            font-weight: 400;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* Auth wrapper with modern gradient */
        .auth-wrapper {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .auth-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset('crt6.jpg') }}') center/cover no-repeat;
            opacity: 0.1;
            z-index: 1;
        }
        
        .auth-container {
            width: 100%;
            max-width: 480px;
            position: relative;
            z-index: 2;
        }
        
        .auth-card {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .auth-logo {
            margin-bottom: 2rem;
        }
        
        .auth-logo svg {
            width: 60px;
            height: 60px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        
        /* Enhanced form controls */
        .form-control {
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            padding: 14px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            background: #ffffff;
            transform: translateY(-1px);
        }
        
        /* Enhanced continue button */
        .btn-continue {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 16px 24px;
            font-size: 18px;
            font-weight: 700;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(102, 126, 234, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-continue:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }
        
        .btn-continue:active {
            transform: translateY(0);
        }
        
        /* Enhanced social login buttons */
        .social-btn {
            border-radius: 12px;
            padding: 14px;
            border: 2px solid #e5e7eb;
            background: #ffffff;
            transition: all 0.3s ease;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        
        .social-btn.google:hover {
            border-color: #ea4335;
            background: #fef5f1;
        }
        
        .social-btn.facebook:hover {
            border-color: #1877f2;
            background: #f0f7ff;
        }
        
        .social-btn.github:hover {
            border-color: #333;
            background: #f6f8fa;
        }
        
        .social-btn img {
            width: 24px;
            height: 24px;
        }
        
        /* Custom checkbox */
        .custom-checkbox {
            width: 20px;
            height: 20px;
            cursor: pointer;
            border: 2px solid #e5e7eb;
            border-radius: 4px;
            transition: all 0.2s ease;
        }
        
        .custom-checkbox:checked {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-color: #667eea;
        }
        
        /* Divider styling */
        .divider {
            position: relative;
            text-align: center;
            margin: 2rem 0;
        }
        
        .divider::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e5e7eb;
        }
        
        .divider span {
            background: rgba(255, 255, 255, 0.95);
            padding: 0 1rem;
            color: #6b7280;
            font-size: 14px;
            font-weight: 500;
        }
        
        /* Loading state */
        .btn-loading:disabled {
            opacity: 0.8;
            cursor: not-allowed;
        }
        
        .btn-loader img {
            filter: brightness(0) invert(1);
        }
        
        /* Responsive */
        @media (max-width: 576px) {
            .auth-container {
                max-width: 100%;
                padding: 10px;
            }
            
            .btn-continue {
                font-size: 16px;
                padding: 14px 20px;
            }
            
            .social-btn {
                height: 48px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    @yield('content')
    
    @stack('scripts')
</body>
</html>
