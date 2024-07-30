<?php

use Illuminate\Support\Facades\Route;

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
    return view('become-partner');
})->name('become-a-partner');