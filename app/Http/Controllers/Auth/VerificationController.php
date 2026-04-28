<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendOTPMail;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    public function showVerifyForm()
    {
        if (!session()->has('verify_email')) {
            return redirect()->route('login');
        }
        return view('auth.verify-otp');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'otp' => 'required|array|size:6',
            'otp.*' => 'required|numeric|digits:1',
        ]);

        $otpCode = implode('', $request->otp);
        $email = session('verify_email');

        $user = User::where('email', $email)->first();

        if (!$user || $user->otp_code !== $otpCode || now()->gt($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'The provided verification code is invalid or has expired.']);
        }

        // Verify user
        $user->email_verified_at = now();
        $user->otp_code = null;
        $user->otp_expires_at = null;
        $user->save();

        Auth::login($user);

        session()->forget('verify_email');

        return redirect()->route('dashboard')->with('success', 'Email verified successfully!');
    }

    public function resend()
    {
        $email = session('verify_email');
        if (!$email) {
            return redirect()->route('login');
        }

        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->route('login');
        }

        $otp = rand(100000, 999999);
        $user->otp_code = $otp;
        $user->otp_expires_at = now()->addMinutes(10);
        $user->save();

        Mail::to($user->email)->send(new SendOTPMail($user, $otp));

        return back()->with('status', 'A new verification code has been sent to your email.');
    }
}

