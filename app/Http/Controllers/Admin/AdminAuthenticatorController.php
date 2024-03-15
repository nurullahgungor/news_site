<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use App\Mail\AdminSendForgotPasswordMail;
use App\Http\Requests\Auth\HandleLoginRequest;
use App\Http\Requests\Auth\HandleForgotPassword;


class AdminAuthenticatorController extends Controller
{
    /* Login */
    public function login(){
        return view('admin.auth.login');
    }
    /* Handle Login */
    public function handleLogin(HandleLoginRequest $request){
        $request->authenticate();

        return redirect() -> route('admin.dashboard');
    }

    /* logout */
    public function logout(Request $request): RedirectResponse{
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }


    public function forgotPassword(){
        return view('admin.auth.forgot-password');
    }

    public function handleForgotPassword(HandleForgotPassword $request){
        $token = \Str::random(64);

        $admin = Admin::where('email', $request->email)->first();
        $admin->remember_token = $token;
        $admin->save();
        Mail::to($request->email)->send(new AdminSendForgotPasswordMail($token, $request->email));

        return redirect()->back()->with('success', __('A mail has been sent to your email address please check!'));

    }

    public function resetPassword($token)
    {
        return view('admin.auth.reset-password', compact('token'));
    }

}
