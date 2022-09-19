<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login'
        ]);
    }
    public function admin()
    {
        return view('admin.login', [
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Harap verifikasi bahwa Anda bukan robot.'
            ],

        );

        if ($user = Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.index');
            }
            return redirect()->intended('/');
        }
        // if (!auth()->check() || auth()->user()->email !== 'saddamhk567@gmail.com') {
        //     abort(403);
        //     return redirect('admin.kelolabarang');
        // }

        return back()->with('loginError', 'Login Gagal');
    }
    public function logout()
    {
        $user = auth()->user();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        if ($user->is_admin) {
            return redirect('login');
        }
        return redirect('');
    }
}
