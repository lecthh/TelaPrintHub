<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function catalog()
    {
        return view('designer.catalog');
    }
}
