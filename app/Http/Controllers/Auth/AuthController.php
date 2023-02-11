<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $valid = $request->only('email', 'password');

            if (Auth::attempt($valid)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with(
                    'error',
                    'Invalid credentials.'
                );
            }
        } else {
            return view('back-end.auth.login');
        }
    }


    public function resister()
    {
        return view('back-end.auth.resister');
    }

    public function forgetPassword()
    {
        return view('back-end.auth.forget-password');
    }
}
