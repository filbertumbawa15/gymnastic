<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\LandingpagesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login.process');
    Route::post('register', [AuthController::class, 'register_form'])->name('register.process');
    Route::get('verify-otp/{param}', [AuthController::class, 'showOtpForm'])->name('otp.verify')->where('param', '.*');;
    Route::post('verify-otp-post', [AuthController::class, 'verifyOtp'])->name('otp.check');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users/get', [UserController::class, 'get'])->name('users.get');
    Route::resource('users', UserController::class);

    Route::post('/roles/check-role', [RoleController::class, 'checkRole'])->name('check.role');
    Route::get('/roles/get', [RoleController::class, 'get'])->name('roles.get');
    Route::resource('roles', RoleController::class);

    Route::post('/roles/check-feature', [FeatureController::class, 'checkFeature'])->name('check.feature');
    Route::get('/features/get', [FeatureController::class, 'get'])->name('features.get');
    Route::resource('features', FeatureController::class);

    Route::get('/pricing/get', [PricingController::class, 'get'])->name('pricing.get');
    Route::resource('pricing', PricingController::class);

    Route::get('/payment/{pricingPlan}', [LandingpagesController::class, 'payment'])->name('payment.show');
    Route::post('/storepay', [LandingpagesController::class, 'confirmpay'])->name('payment.confirm');
    Route::get('/formpayment/{trx_id}', [LandingpagesController::class, 'paymentform'])->name('payment.form');
});

Route::get('/', [LandingpagesController::class, 'index'])->name('landingpage');
