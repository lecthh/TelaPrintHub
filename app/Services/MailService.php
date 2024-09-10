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
        $token = Str::random(16);

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

    public function sendConfirmationLink(OrderPlacement $orderPlacement)
    {
        $designerName = $orderPlacement->order->designerCompany->name;
        $userName = $orderPlacement->userDetails->name;
        $order_placement_ID = $orderPlacement->order_placement_ID;
        $userEmail = $orderPlacement->userDetails->email;

        $token = Str::random(16);
        $url = URL::temporarySignedRoute(
            'confirmation-link',
            now()->addDays(3),
            ['order_placement_ID' => $order_placement_ID, 'token' => $token,]
        );
        Mail::send('mail.confirmationLink', ['Designer' => $designerName, 'name' => $userName, 'url' => $url], function ($message) use ($userEmail) {
            $message->to($userEmail)
                ->subject('Your Design Has been Finalized!');
        });
    }
}
