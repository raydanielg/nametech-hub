<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOTPMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $otp)
    {
        $this->user = $user;
        $this->otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Verify your email - NAMTECH-HUB')
                    ->html($this->getEmailHtml());
    }

    private function getEmailHtml()
    {
        $year = date('Y');
        return "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e5e7eb; border-radius: 12px; background-color: #ffffff;'>
            <div style='text-align: center; margin-bottom: 30px;'>
                <h1 style='color: #10b981; margin: 0;'>NAMTECH-HUB</h1>
                <p style='color: #6b7280; font-size: 14px;'>Empowering African Innovation</p>
            </div>
            
            <h2 style='color: #111827; font-size: 20px; font-weight: bold; margin-bottom: 20px;'>Verify your account</h2>
            <p style='color: #4b5563; line-height: 1.6;'>Hi {$this->user->first_name},</p>
            <p style='color: #4b5563; line-height: 1.6;'>Thank you for joining NAMTECH-HUB. To complete your registration, please use the verification code below:</p>
            
            <div style='text-align: center; margin: 40px 0; padding: 20px; background-color: #f9fafb; border-radius: 8px;'>
                <span style='font-size: 32px; font-weight: bold; letter-spacing: 8px; color: #111827;'>{$this->otp}</span>
            </div>
            
            <p style='color: #4b5563; line-height: 1.6;'>This code will expire in 10 minutes. If you did not request this, please ignore this email.</p>
            
            <div style='margin-top: 40px; padding-top: 20px; border-top: 1px solid #e5e7eb; text-align: center;'>
                <p style='color: #9ca3af; font-size: 12px;'>© {$year} NAMTECH-HUB. All rights reserved.</p>
                <div style='margin-top: 10px;'>
                    <a href='#' style='color: #10b981; text-decoration: none; font-size: 12px; margin: 0 10px;'>Terms of Service</a>
                    <a href='#' style='color: #10b981; text-decoration: none; font-size: 12px; margin: 0 10px;'>Privacy Policy</a>
                </div>
            </div>
        </div>";
    }
}
