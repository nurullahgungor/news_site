<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthenticatorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['prefix'=> 'admin' , 'as' => 'admin.'], function(){

     Route::get('/', function(){
            return redirect() -> route('admin.dashboard');
    });
    // Login
    Route::get('login', [AdminAuthenticatorController::class, 'login'])
        ->name('login');
    Route::post('login', [AdminAuthenticatorController::class, 'handleLogin'])
        ->name('handleLogin');


    // Logout
    Route::get('logout', [AdminAuthenticatorController::class, 'logout'])
        ->name('logout');
    Route::post('logout', [AdminAuthenticatorController::class, 'logout'])
        ->name('logout');

    // Forgot Password
    Route::get('forgot-password', [AdminAuthenticatorController::class, 'forgotPassword'])
        ->name('forgotPassword');
    Route::post('forgot-password', [AdminAuthenticatorController::class, 'handleForgotPassword'])
        ->name('forgotPassword.send');

    // Reset Password
    Route::get('reset-password/{token}', [AdminAuthenticatorController::class, 'resetPassword'])
        ->name('resetPassword');
    Route::post('reset-password', [AdminAuthenticatorController::class, 'handleResetPassword'])
        ->name('resetPassword.send');


    // middleware: admin
    Route::middleware('admin')->group(function(){

        //Dashboard
        Route::get('dashboard', [DashboardController::class,'index'])
            ->name('dashboard');


        //Profile Routes
        Route::get('profile', [ProfileController::class, 'index'])
            ->name('profile');

        // Activities
        Route::get('activities', function(){
            return view('admin.activities');
        })->name('activities');
        // settings
        Route::get('settings', function(){
            return view('admin.settings');
        })->name('settings');
    });
});
