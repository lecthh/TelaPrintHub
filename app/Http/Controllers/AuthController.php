<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\DesignerCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    function loginPost(Request $request)
    {
    }

    public function register()
    {
        $countryCodes = DB::table('country_codes')->get();
        return view('become-partner', compact('countryCodes'));
    }

    public function registerPost(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:20',
        ]);

        $fullPhoneNumber = $validated['country_code'] . $validated['phone_number'];

        $admin = Admin::create([
            'admin_ID' => (string) Uuid::generate(4),
            'admin_type_ID' => 2,
            'name' => "Joel",
            'email' => $request->input('email'),
            'password' => null,
            'contact_information' => $fullPhoneNumber,
        ]);

        DesignerCompany::create([
            'designer_ID' => (string) Uuid::generate(4),
            'admin_ID' => $admin->admin_ID,
            'description' => $request->input('description'),
            'logo' => $request->input('logo', null),
            'contact_details' => $fullPhoneNumber,
            'email' => $admin->email,
            'is_verified' => false,
        ]);
        $this->sendVerificationEmail($admin);
        return redirect()->route('home')->with('message', 'Registration successful. Please Check your Email for Confirmation');
    }

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
