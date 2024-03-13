<?php

namespace App\Http\Requests\Auth;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HandleLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }


     /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    //Admin panelinin login sayfasından gelen bilgilerin kontrol edilmesine yarıyor.
    /**
     * bu işlemi
     * app\Http\Requests\Auth\LoginRequest.php
     * yolundaki authenticate fonksiyonunu kopyalayarak aldım.
     */
    function authenticate(): void{
        if (!Auth::guard('admin')->attempt($this->only('email', 'password'),
            $this->boolean('remember')))
        {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

    }
}
