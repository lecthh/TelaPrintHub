<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/track', function() {
    return view('track');
})->name('track');

Route::get('/become-a-partner', function() {
    $countryCodes = DB::table('country_codes')->get();
    return view('become-partner', compact('countryCodes'));
})->name('become-a-partner');