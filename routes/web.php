<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;
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

Route::get('/request-print-1', [UserController::class, "requestPrint1"])->name('request-print-1');
Route::post('/request-print-2', [UserController::class, "requestPrint2"])->name('request-print-2');
Route::post('/request-print-3', [UserController::class, "requestPrint3"])->name('request-print-3');

Route::get('/become-a-partner', [AuthController::class, "register"])->name('become-a-partner');
Route::post('/become-a-partner', [AuthController::class, "registerPost"])->name('become-a-partner.post');

Route::get('setpassword/{token}', [PasswordController::class, "showSetPasswordForm"])->name('setpassword');
Route::post('setpassword', [PasswordController::class, "setPassword"])->name('setpassword.post');

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');

Route::middleware("auth.basic")->group(function () {
    Route::view('/catalog', [AdminController::class, "catalog"])->name('catalog');
});
