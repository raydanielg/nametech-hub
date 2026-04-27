@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex align-items-center justify-content-center">
    <div class="auth-container">
        <div class="auth-logo text-center mb-4">
            <div class="bg-white rounded-circle shadow-sm d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key-round"><path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4c.9.1 1.8.1 2.6-.2.8-.3 1.5-.8 2.1-1.4.6-.6 1.1-1.3 1.4-2.1.3-.8.3-1.7.2-2.6L20 4c-.2-.6-.7-1-1.2-1L15 3.1c-.9-.1-1.8-.1-2.6.2-.8.3-1.5.8-2.1 1.4-.6.6-1.1 1.3-1.4 2.1-.3.8-.3 1.7-.2 2.6L2 15.6V18Z"/><circle cx="15.5" cy="8.5" r=".5" fill="currentColor"/></svg>
            </div>
            <h2 class="fw-bold text-dark mb-1">Forgot password?</h2>
            <p class="text-muted small">No worries, we'll send you reset instructions.</p>
        </div>

        <div class="card border-0 shadow-sm auth-card">
            <div class="card-body p-4 p-md-5">
                @if (session('status'))
                    <div class="alert alert-success border-0 shadow-sm mb-4" role="alert">
                        <div class="d-flex align-items-center gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span class="small fw-medium">{{ session('status') }}</span>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label text-muted small fw-semibold">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg bg-light border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@example.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold py-3 shadow-sm" style="background-color: #10b981; border-color: #10b981;">
                            {{ __('Reset password') }}
                        </button>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-muted text-decoration-none small fw-semibold d-inline-flex align-items-center gap-2 hover-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                            Back to log in
                        </a>
                    </div>
                </form>
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
    .hover-primary:hover {
        color: #10b981 !important;
    }
</style>
@endsection
