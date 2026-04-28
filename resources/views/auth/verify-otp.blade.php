@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex align-items-center justify-content-center">
    <div class="auth-container">
        <div class="auth-logo text-center mb-4">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 5L35 30H5L20 5Z" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 15L28 28H12L20 15Z" fill="#10b981"/>
            </svg>
            <h4 class="mt-2 fw-bold text-dark">Verify your email</h4>
            <p class="text-muted small">We've sent a 6-digit code to <strong>{{ session('verify_email') }}</strong></p>
        </div>

        <div class="card border-0 shadow-sm auth-card">
            <div class="card-body p-4 p-md-5">
                <form method="POST" action="{{ route('verify.otp.submit') }}" id="otp-form">
                    @csrf

                    <div class="d-flex justify-content-between mb-4 otp-container">
                        @for($i = 0; $i < 6; $i++)
                            <input type="text" 
                                   name="otp[]" 
                                   class="form-control otp-input text-center fw-bold fs-4 bg-light border-0" 
                                   maxlength="1" 
                                   required 
                                   autocomplete="off" 
                                   inputmode="numeric">
                        @endfor
                    </div>

                    @error('otp')
                        <div class="text-danger small text-center mb-3">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold py-3 shadow-sm position-relative overflow-hidden btn-loading" style="background-color: #10b981; border-color: #10b981;">
                            <span class="btn-text">{{ __('Verify Account') }}</span>
                            <span class="btn-loader d-none">
                                <img src="{{ asset('Spinner@1x-3.0s-136px-136px.svg') }}" width="24" height="24" alt="Loading...">
                            </span>
                        </button>
                    </div>

                    <p class="text-center mt-4 mb-0 small text-muted">
                        Didn't receive the code? 
                        <a href="{{ route('verify.otp.resend') }}" class="text-primary text-decoration-none fw-semibold">Resend Code</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-wrapper {
        min-height: 100vh;
        background: #f9fafb;
        position: relative;
    }
    .auth-container {
        width: 100%;
        max-width: 440px;
        padding: 20px;
    }
    .auth-card {
        border-radius: 16px;
    }
    .otp-input {
        width: 50px;
        height: 60px;
        margin: 0 4px;
        border-radius: 12px;
        transition: all 0.2s ease;
    }
    .otp-input:focus {
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
        background-color: #fff !important;
        border: 1px solid #10b981;
    }
    .btn-loading:disabled {
        opacity: 0.8;
        cursor: not-allowed;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('.otp-input');
        const form = document.getElementById('otp-form');

        inputs.forEach((input, index) => {
            // Handle typing
            input.addEventListener('input', function() {
                if (this.value.length === 1) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    } else {
                        // All digits entered, auto submit
                        checkAndSubmit();
                    }
                }
            });

            // Handle backspace
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && this.value.length === 0 && index > 0) {
                    inputs[index - 1].focus();
                }
            });

            // Handle paste
            input.addEventListener('paste', function(e) {
                e.preventDefault();
                const pasteData = e.clipboardData.getData('text').slice(0, 6).split('');
                pasteData.forEach((char, i) => {
                    if (inputs[i]) {
                        inputs[i].value = char;
                    }
                });
                checkAndSubmit();
            });
        });

        function checkAndSubmit() {
            const allFilled = Array.from(inputs).every(input => input.value.length === 1);
            if (allFilled) {
                const btn = form.querySelector('.btn-loading');
                btn.disabled = true;
                btn.querySelector('.btn-text').classList.add('d-none');
                btn.querySelector('.btn-loader').classList.remove('d-none');
                form.submit();
            }
        }

        // Focus first input
        inputs[0].focus();
    });
</script>
@endsection
