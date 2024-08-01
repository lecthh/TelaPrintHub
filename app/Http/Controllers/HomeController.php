<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function requestPrint()
    {
        $designerCompanies = DB::table('designer_company')->get();
        $countryCodes = DB::table('country_codes')->get();
        return view('request-print', compact('countryCodes', 'designerCompanies'));
    }
}
