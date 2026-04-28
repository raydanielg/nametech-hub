@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex align-items-center justify-content-center">
    <div class="auth-container">
        <div class="auth-logo text-center mb-4">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 5L35 30H5L20 5Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 15L28 28H12L20 15Z" fill="black"/>
            </svg>
            <h4 class="mt-2 fw-bold text-dark">Log in</h4>
        </div>

        <div class="card border-0 shadow-sm auth-card">
            <div class="card-body p-4 p-md-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label text-muted small fw-semibold">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg bg-light border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@example.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label text-muted small fw-semibold mb-0">{{ __('Password') }}</label>
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none small text-primary" href="{{ route('password.request') }}">
                                    {{ __('Forgot?') }}
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" class="form-control form-control-lg bg-light border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-muted small" for="remember">
                                {{ __('Keep me logged in') }}
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold py-3 shadow-sm position-relative overflow-hidden btn-loading" style="background-color: #10b981; border-color: #10b981;">
                            <span class="btn-text">{{ __('Continue') }} &rarr;</span>
                            <span class="btn-loader d-none">
                                <img src="{{ asset('Spinner@1x-3.0s-136px-136px.svg') }}" width="24" height="24" alt="Loading...">
                            </span>
                        </button>
                    </div>

                    <div class="position-relative text-center my-4">
                        <p class="fs-5 fw-medium italic mb-4 text-dark opacity-75">"Building the future of digital innovation in Africa, one project at a time. Join NAMTECH-HUB and accelerate your tech journey."</p>
                        <hr class="text-muted opacity-25">
                        <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">or</span>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-outline-secondary py-2 d-flex align-items-center justify-content-center gap-2 border-opacity-25">
                            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" width="18" height="18" alt="Google">
                            <span class="small fw-semibold text-dark">Continue with Google</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary py-2 d-flex align-items-center justify-content-center gap-2 border-opacity-25">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            <span class="small fw-semibold text-dark">Continue with GitHub</span>
                        </button>
                    </div>

                    <p class="text-center mt-4 mb-0 small text-muted">
                        Don't have an account? <a href="{{ route('register') }}" class="text-primary text-decoration-none fw-semibold">Sign up</a>
                    </p>
                </form>

                <div class="text-center mt-4 pt-3 border-top">
                    <p class="small text-muted mb-2">
                        By signing in, you agree to our <a href="{{ route('terms') }}" target="_blank" class="text-decoration-underline">Terms</a> and <a href="{{ route('privacy') }}" target="_blank" class="text-decoration-underline">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-wrapper {
        min-height: 100vh;
        background: url('{{ asset('crt6.jpg') }}') center/cover no-repeat;
        position: relative;
    }
    .auth-wrapper::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(2px);
        z-index: 1;
    }
    .auth-container {
        width: 100%;
        max-width: 440px;
        padding: 20px;
        position: relative;
        z-index: 2;
    }
    .auth-card {
        border-radius: 12px;
    }
    .form-control:focus {
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.1);
        background-color: #fff !important;
    }
    .btn-outline-secondary:hover {
        background-color: #f9fafb;
        color: inherit;
    }
    .btn-loading:disabled {
        opacity: 0.8;
        cursor: not-allowed;
    }
    .btn-loader img {
        filter: brightness(0) invert(1);
    }
</style>

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
