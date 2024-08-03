<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class MailService
{

    public function sendVerificationEmail(Admin $admin)
    {
        $token = Str::random(60);

        $url = URL::temporarySignedRoute(
            'setpassword',
            now()->addMinutes(60),
            ['token' => $token, 'email' => $admin->email]
        );

        Mail::send('mail.verify', ['url' => $url], function ($message) use ($admin) {
            $message->to($admin->email);
            $message->subject('Set Your Password');
        });
    }
}
