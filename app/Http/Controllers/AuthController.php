<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    }

    public function setPassword()
    {
        return view('auth.setpassword');
    }
}
