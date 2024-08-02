<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function requestPrint1()
    {
        $designerCompanies = DB::table('designer_company')->get();
        $countryCodes = DB::table('country_codes')->get();
        return view('request.request-1', compact('countryCodes', 'designerCompanies'));
    }

    public function requestPrint2()
    {
        return view('request.request-2');
    }

    public function requestPrint3()
    {
        $countryCodes = DB::table('country_codes')->get();
        return view('request.request-3', compact('countryCodes'));
    }
}
