@extends('layouts.app')

@section('content')
<div class="register-wrapper d-flex min-vh-100">
    <!-- Left Side: Form -->
    <div class="register-left d-flex flex-column p-4 p-md-5 justify-content-center">
        <div class="register-container mx-auto">
            <div class="register-logo mb-4">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 5L35 30H5L20 5Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 15L28 28H12L20 15Z" fill="black"/>
                </svg>
            </div>

            <h2 class="fw-bold text-dark mb-1">Let's create your account</h2>
            <p class="text-muted mb-4 small">Already have an account? <a href="{{ route('login') }}" class="text-primary text-decoration-none fw-semibold">Log in &rarr;</a></p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label text-muted small fw-semibold">First name</label>
                        <input id="first_name" type="text" class="form-control form-control-lg bg-light border-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your first name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label text-muted small fw-semibold">Last name</label>
                        <input id="last_name" type="text" class="form-control form-control-lg bg-light border-0" name="last_name" placeholder="Your last name">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-muted small fw-semibold">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control form-control-lg bg-light border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="you@example.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-muted small fw-semibold">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control form-control-lg bg-light border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="••••••••">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Added Confirm Password to ensure registration logic works -->
                <div class="mb-3">
                    <label for="password-confirm" class="form-label text-muted small fw-semibold">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control form-control-lg bg-light border-0" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input mt-1" type="checkbox" name="terms" id="terms" required>
                        <label class="form-check-label text-muted small" for="terms">
                            I agree to the <a href="#" class="text-muted text-decoration-underline">Terms of Service</a> and <a href="#" class="text-muted text-decoration-underline">Privacy Policy</a>
                        </label>
                    </div>
                </div>

                <div class="d-grid gap-2 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg fw-bold py-3 shadow-sm border-0 btn-loading" style="background-color: #10b981;">
                        <span class="btn-text">Continue &rarr;</span>
                        <span class="btn-loader d-none">
                            <img src="{{ asset('Spinner@1x-3.0s-136px-136px.svg') }}" width="24" height="24" alt="Loading...">
                        </span>
                    </button>
                </div>

                <div class="position-relative text-center my-4">
                    <hr class="text-muted opacity-25">
                    <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">or</span>
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="button" class="btn btn-outline-secondary py-2 d-flex align-items-center justify-content-center gap-2 border-opacity-25">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" width="18" height="18" alt="Google">
                        <span class="small fw-semibold text-dark">Continue with Google</span>
                    </button>
                    <button type="button" class="btn btn-outline-secondary py-2 d-flex align-items-center justify-content-center gap-2 border-opacity-25">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        <span class="small fw-semibold text-dark">Continue with GitHub</span>
                    </button>
                    <button type="button" class="btn btn-outline-secondary py-2 d-flex align-items-center justify-content-center gap-2 border-opacity-25">
                        <span class="small fw-semibold text-dark">Continue with SSO</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Side: Testimonial/Preview -->
    <div class="register-right flex-fill d-none d-lg-flex flex-column p-5 text-white" style="background: url('{{ asset('close-up-man-repairing-computer-chips.jpg') }}') center/cover no-repeat; position: relative; min-height: 100vh;">
        <!-- Overlay for better text readability if needed, currently very light -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.05); z-index: 1;"></div>
        
        <!-- Empty space on top/middle where the card was -->
        <div class="flex-grow-1"></div>
        
        <!-- Testimonial with fade effect -->
        <div class="mt-auto w-100" style="position: relative; z-index: 2; background: linear-gradient(to top, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 50%, rgba(255,255,255,0) 100%); padding: 60px 40px 40px 40px;">
            <div class="mx-auto" style="max-width: 600px;">
                <p class="fs-5 fw-medium italic mb-4 text-dark opacity-75">"Building the future of digital innovation in Africa, one project at a time. Join NAMTECH-HUB and accelerate your tech journey."</p>
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle bg-dark overflow-hidden shadow-sm" style="width:48px; height:48px; border: 2px solid white;">
                        <img src="{{ asset('200621393.jfif') }}" alt="Ezra Daniel" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="text-start text-dark">
                        <p class="mb-0 fw-bold small">Ezra Daniel</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="small opacity-75">Chief Technical Officer</span>
                            <span class="badge bg-danger bg-opacity-10 text-danger fw-bold x-small" style="font-size: 0.7rem; padding: 2px 6px;">NAMTECH-HUB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .register-left {
        width: 100%;
        max-width: 600px;
        background-color: white;
    }
    .register-container {
        width: 100%;
        max-width: 440px;
    }
    .form-control:focus {
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.1);
        background-color: #fff !important;
    }
    .btn-outline-secondary:hover {
        background-color: #f9fafb;
        color: inherit;
    }
    .code-placeholder div {
        height: 12px;
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
