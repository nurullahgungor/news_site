<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthenticatorController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(['prefix'=> 'admin' , 'as' => 'admin.'], function(){

    Route::get('login', [AdminAuthenticatorController::class, 'login'])
        ->name('login');

    Route::post('login', [AdminAuthenticatorController::class, 'handleLogin'])
        ->name('handleLogin');

    Route::middleware('admin')->group(function(){

        Route::get('dashboard', [DashboardController::class,'index'])
        ->name('dashboard');

    });
});
