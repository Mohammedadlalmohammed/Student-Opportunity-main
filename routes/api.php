<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController as userauthcontroller;
use App\Http\Controllers\Admin\AuthController as adminauthcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('V1')->group(function () {

    Route::prefix('auth')->group(function () {

        Route::post('/register', [userauthcontroller::class, 'register']);
        Route::post('/login', [userauthcontroller::class, 'login']);

        Route::post('/send-otp', [userauthcontroller::class, 'sendOtp']);
        Route::post('/resend-otp', [userauthcontroller::class, 'resendOtp']);
        Route::post('/verify-otp', [userauthcontroller::class, 'verifyOtp']);

        Route::post('/forget-password', [userauthcontroller::class, 'forgetPassword']);
        Route::post('/reset-password', [userauthcontroller::class, 'resetPassword']);

        Route::middleware('auth:sanctum')->group(function () {
            Route::post('/logout', [userauthcontroller::class, 'logout']);
            Route::get('/profile', [userauthcontroller::class, 'getProfile']);
            Route::put('/profile', [userauthcontroller::class, 'updateProfile']);
        });

    });
});


