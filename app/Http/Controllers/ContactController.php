<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        try {

            Mail::raw(
                "Name: {$data['fullname']}\nEmail: {$data['email']}\n\nMessage:\n{$data['message']}",
                function ($mail) {
                    $mail->to(config('mail.from.address'))
                        ->subject('New contact form submission received');
                }
            );

            return response(
                "<span><ion-icon name='mail-outline'></ion-icon> Your message was sent successfully.</span>"
            );
        } catch (Exception $e) {
            return response(
                "<span><ion-icon name='bug-outline'></ion-icon> Mailer Error:<br><br>{$e->getMessage()}</span>",
                500
            );
        }
    }
}
