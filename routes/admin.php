<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthenticatorController;


Route::group(['prefix'=> 'admin' , 'as' => 'admin.'], function(){


    Route::get('login', [AdminAuthenticatorController::class, 'login'])
        ->name('login');


});
