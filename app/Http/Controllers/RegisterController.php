<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller

{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:6|max:255',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Harap verifikasi bahwa Anda bukan robot.'
            ],
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

        user::create($validatedData);


        return redirect('/login')->with('success', 'Yeay, Registrasi Berhasil! Silahkan Masuk');
    }
}
