<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthenticatorController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
}
