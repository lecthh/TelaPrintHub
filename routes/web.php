<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
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
Route::post('/become-a-partner', [AuthController::class, "registerPost"])->name('become-a-partner.post');

Route::get('setpassword/{token}', [PasswordController::class, "showSetPasswordForm"])->name('setpassword');
Route::post('setpassword', [PasswordController::class, "setPassword"])->name('setpassword.post');

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');

Route::middleware("auth.basic")->group(function () {
    Route::view('/catalog', 'partner.catalog')->name('catalog');
});
