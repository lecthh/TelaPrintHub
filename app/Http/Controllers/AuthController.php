<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AuthenticationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('catalog');
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
        }
    }

    public function register()
    {
        $countryCodes = DB::table('country_codes')->get();
        return view('become-partner', compact('countryCodes'));
    }

    public function registerPost(Request $request)
    {
        $validated = $request->validate([
            'partner-type' => 'required|string',
            'company_name' => 'required|string|max:255|unique:Admin,name',
            'email' => 'required|email|max:255|unique:Admin,email',
            'country_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:20|unique:Admin,contact_information',
            'apparel_categories' => 'array|required',
        ], [
            'apparel_categories.required' => 'Please select at least one apparel category.',
            'company_name.required' => 'Company name is required.',
            'company_name.unique' => 'Company name is already in use.',
            'email.required' => 'Email is required.',
            'email.unique' => 'Email is already in use.',
            'email.email' => 'Email must be a valid email address.',
            'country_code.required' => 'Country code is required.',
            'phone_number.required' => 'Phone number is required.',
            'phone_number.unique' => 'Phone number is already in use.',
        ]);

        $this->authService->registerDesignerCompany($validated);

        Session::flash('partnership', [
            'status' => true,
            'email' => $validated['email']
        ]);
        return redirect()->route('home');
    }
}
