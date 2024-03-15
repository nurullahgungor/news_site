<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthenticatorController;
use App\Http\Controllers\Admin\DashboardController;



Route::group(['prefix'=> 'admin' , 'as' => 'admin.'], function(){
    /* Login */
    Route::get('login', [AdminAuthenticatorController::class, 'login'])
        ->name('login');
    Route::post('login', [AdminAuthenticatorController::class, 'handleLogin'])
        ->name('handleLogin');


    /* Logout */
    Route::get('logout', [AdminAuthenticatorController::class, 'logout'])
        ->name('logout');
    Route::post('logout', [AdminAuthenticatorController::class, 'logout'])
        ->name('logout');

    /* Reset Password */
    Route::get('forgot-password', [AdminAuthenticatorController::class, 'forgotPassword'])
        ->name('forgotPassword');
    Route::post('forgot-password', [AdminAuthenticatorController::class, 'handleForgotPassword'])
        ->name('forgotPassword.send');


    Route::get('reset-password/{token}', [AdminAuthenticatorController::class, 'resetPassword'])
        ->name('resetPassword');


    // middleware: admin
    Route::middleware('admin')->group(function(){

        Route::get('dashboard', [DashboardController::class,'index'])
        ->name('dashboard');

    });
});
