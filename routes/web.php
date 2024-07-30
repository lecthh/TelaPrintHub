<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/track', function () {
    return view('track');
})->name('track');


Route::get('/become-a-partner', [AuthController::class, "register"])->name('become-a-partner');
// Route::post('/become-a-partner', [AuthController::class, "registerPost"])->name('become-a-partnerPost');

Route::get('/setpassword', [AuthController::class, "setPassword"])->name('setpassword');
Route::post('/setpassword', [AuthController::class, "setPasswordPost"])->name('setpasswordPost');

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('loginPost');
