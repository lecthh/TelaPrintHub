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

Route::get('/confirm', function () {
    return view('order-confirmation');
})->name('order-confirmation');

// temporary for front end reasons
Route::get('/orders', function () {
    return view('partner.order');
})->name('order-confirmation');

Route::get('/order-confirm-reqs', function () {
    return view('partner.order-confirm-req');
})->name('order-confirm-reqs');

Route::get('/order-pending', function () {
    return view('partner.order-pending');
})->name('order-pending');

Route::get('/order-active', function () {
    return view('partner.order-active');
})->name('order-active');


Route::get('/request-company-selection', [UserController::class, "requestCompanySelection"])->name('request-company-selection');
Route::post('/request-company-selection', [UserController::class, "requestCompanySelectionPost"])->name('request-company-selection-post');

Route::get('/request-apparel-customization', [UserController::class, "requestApparelCustomization"])->name('request-apparel-customization');
Route::post('/request-apparel-customization', [UserController::class, "requestApparelCustomizationPost"])->name('request-apparel-customization-post');

Route::get('/request-finalization', [UserController::class, "requestFinalization"])->name('request-finalization');
Route::post('/request-finalization', [UserController::class, "requestFinalizationPost"])->name('request-finalization-post');

Route::get('/become-a-partner', [AuthController::class, "register"])->name('become-a-partner');
Route::post('/become-a-partner', [AuthController::class, "registerPost"])->name('become-a-partner.post');

Route::get('setpassword/{token}', [PasswordController::class, "showSetPasswordForm"])->name('setpassword');
Route::post('setpassword', [PasswordController::class, "setPassword"])->name('setpassword.post');

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');

Route::middleware("auth")->group(function () {
    Route::get('/catalog', [AdminController::class, "catalog"])->name('catalog');
});
