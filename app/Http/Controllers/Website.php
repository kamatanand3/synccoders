<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Website extends Controller
{
    public function sendEmail(Request $request)
    {
        // Retrieve form input
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $captcha = $request->input('captcha');
        $captchaSum = $request->input('captcha_sum');

        // Check if captcha is correct
        if ($captcha != $captchaSum) {
            return redirect()->back()->with('error', 'Captcha validation failed. Please try again.');
        }

        // Compose the email content with additional fields
        $emailContent = "Name: $name\n";
        $emailContent .= "Email: $email\n";
        $emailContent .= "Phone: $phone\n\n";
        $emailContent .= "Subject: $subject\n\n";
        $emailContent .= "Message: \n$message";

        Mail::raw($emailContent, function($mail) use ($email, $subject) {
            $mail->to($email)->subject("Subject: $subject");
        });

        // Redirect back or to a success page
        return redirect('/')->with('success', 'Email sent successfully!');
    }
}
