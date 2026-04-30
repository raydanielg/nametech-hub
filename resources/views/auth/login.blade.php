@extends('layouts.auth')

@section('title', 'Login - NAMTECH-HUB')

@section('content')
<div class="auth-wrapper">
    <div class="auth-container">
        <div class="auth-logo text-center">
            <svg width="60" height="60" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 5L35 30H5L20 5Z" stroke="#667eea" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 15L28 28H12L20 15Z" fill="#667eea"/>
            </svg>
            <h2 class="mt-3 fw-bold text-white">Welcome Back</h2>
            <p class="text-white-50">Sign in to your NAMTECH-HUB account</p>
        </div>

        <div class="card auth-card">
            <div class="card-body p-4 p-md-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold text-dark">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label for="password" class="form-label fw-semibold text-dark">Password</label>
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none fw-semibold text-primary" href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input custom-checkbox me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-muted" for="remember">
                                Keep me logged in
                            </label>
                        </div>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-continue btn-loading position-relative overflow-hidden">
                            <span class="btn-text">Continue to Dashboard</span>
                            <span class="btn-loader d-none">
                                <img src="{{ asset('Spinner@1x-3.0s-136px-136px.svg') }}" width="24" height="24" alt="Loading...">
                            </span>
                        </button>
                    </div>

                    <div class="divider">
                        <span>or continue with</span>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <button type="button" class="social-btn google w-100" title="Google">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="social-btn facebook w-100" title="Facebook">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#1877f2">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <p class="text-center mb-0 text-muted">
                        New to NAMTECH-HUB? <a href="{{ route('register') }}" class="text-primary text-decoration-none fw-semibold">Create an account</a>
                    </p>
                </form>

                <div class="text-center mt-4 pt-3 border-top">
                    <p class="small text-muted mb-0">
                        By signing in, you agree to our <a href="{{ route('terms') }}" target="_blank" class="text-decoration-underline text-primary">Terms</a> and <a href="{{ route('privacy') }}" target="_blank" class="text-decoration-underline text-primary">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function() {
            const btn = this.querySelector('.btn-loading');
            if (btn) {
                btn.disabled = true;
                btn.querySelector('.btn-text').classList.add('d-none');
                btn.querySelector('.btn-loader').classList.remove('d-none');
            }
        });
    });
</script>
@endsection
