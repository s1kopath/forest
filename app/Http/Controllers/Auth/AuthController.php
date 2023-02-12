<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function logout()
    {
        Auth::logout();
        return view('back-end.auth.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed',
            ]);

            $newUser = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'user_type' => 'admin',
                'referer_id' => $request->referer_id ?? null,
                'refer_code'=>uniqid()
            ]);

            Auth::login($newUser);
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        } else {
            return view('back-end.auth.register');
        }
    }

    public function registerWithRefer($refer_code)
    {
        $check = User::where('refer_code', $refer_code)->first();

        if ($check) {
            session([
                'referer_id' => $check->id,
                'referer_name' => $check->name
            ]);
        }

        return redirect()->route('register');
    }

    public function forgetPassword()
    {
        return view('back-end.auth.forget-password');
    }
}
