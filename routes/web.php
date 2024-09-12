<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderActiveController;
use App\Http\Controllers\OrderConfirmedController;
use App\Http\Controllers\OrderPendingController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\PreventBackHistory;
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
Route::get('/order-active', function () {
    return view('designer.active.view');
})->name('order-active');

Route::get('/order-active-x', function () {
    return view('designer.active.order');
})->name('order-active-x');

Route::get('/order-confirmed', function () {
    return view('designer.confirmed.view');
})->name('order-confirmed');

Route::get('/order-confirmed-x', function () {
    return view('designer.confirmed.order');
})->name('order-confirmed-x');

Route::get('/order-pending', function () {
    return view('designer.pending.view');
})->name('order-pending');

Route::get('/order-pending-x', function () {
    return view('designer.pending.order');
})->name('order-pending-x');

Route::get('/profile-x', function () {
    return view('designer.profile');
})->name('profile');


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

    Route::get('/order/pending', [OrderPendingController::class, "orderPendingTable"])->name('order-pending');

    Route::get('/order/pending/details/{order_placement_ID}', [OrderPendingController::class, "orderPending"])->name('order-pending-details');
    Route::post('/order/pending/details', [OrderPendingController::class, "orderPendingPost"])->name('order-pending-details-post');

    Route::get('/order/confirmed', [OrderConfirmedController::class, "orderConfirmedTable"])->name('order-confirmed');

    Route::get('/order/confirmed/details/{order_placement_ID}', [OrderConfirmedController::class, "orderConfirmed"])->name('order-confirmed-details');
    Route::post('/order/confirmed/details', [OrderConfirmedController::class, "orderConfirmedPost"])->name('order-confirmed-details-post');

    Route::get('/order/active', [OrderActiveController::class, "orderActiveTable"])->name('order-active');

    Route::get('/order/active/details/{order_placement_ID}', [OrderActiveController::class, "orderActive"])->name('order-active-details');

    Route::get('/profile', [AdminController::class, "profile"])->name('profile');
    Route::post('/profile', [AdminController::class, "profilePost"])->name('profile-post');
});

Route::get('/confirmation-link/{order_placement_ID}/{token}', [OrderConfirmedController::class, 'showConfirmationLink'])->name('confirmation-link');
Route::post('/confirmation-link', [OrderConfirmedController::class, 'showConfirmationLinkPost'])->name('confirmation-link-post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(PreventBackHistory::class);
