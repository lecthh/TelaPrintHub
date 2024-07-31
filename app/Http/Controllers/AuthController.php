<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AuthenTicationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthenTicationService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('catalog');
        }

        return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
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
            'description' => 'nullable|string',
            'logo' => 'nullable|string',
            'apparel_categories' => 'array',
        ]);

        $this->authService->registerDesignerCompany($validated);

        return redirect()->route('home')->with('message', 'Registration successful. Please check your email for confirmation.');
    }
}
