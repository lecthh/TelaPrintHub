<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\OrderPlacement;
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
        $name = $admin->name;

        Mail::send('mail.verify', ['url' => $url, 'name' => $name], function ($message) use ($admin) {
            $message->to($admin->email);
            $message->subject('Set Your Password');
        });
    }

    public function sendOrderPendingMail(OrderPlacement $orderPlacement)
    {
        $designerName = $orderPlacement->order->designerCompany->name;
        $userName = $orderPlacement->userDetails->name;

        $userEmail = $orderPlacement->userDetails->email;

        Mail::send('mail.confirmation', ['Designer' => $designerName, 'name' => $userName], function ($message) use ($userEmail) {
            $message->to($userEmail)
                ->subject('Your Order From Tel-A Has Been Confirmed!');
        });
    }
}
