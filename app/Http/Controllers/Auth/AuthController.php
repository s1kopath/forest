<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Otp;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\Websitemail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate(
                [
                    'login' => 'required',
                    'password' => 'required'
                ],
                [
                    'login.required' => 'Username or Email is required'
                ]
            );
            
            $remember = $request->remember_me ? true : false;

            $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            $request->merge([
                $login_type => $request->input('login')
            ]);

            $valid = $request->only($login_type, 'password');

            if (Auth::attempt($valid, $remember)) {
                $request->session()->regenerate();
                if (auth()->user()->user_type == 'admin') {
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->route('public_dashboard');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid credentials.');
            }
        } else {
            return view('back-end.auth.login');
        }
    }

    public function publicLogin()
    {
        if (auth()->user()) {
            return redirect()->route('public_dashboard');
        } else {
            return view('front-end.auth.login');
        }
    }

    public function adminRegister()
    {
        return view('back-end.auth.register');
    }

    public function logout()
    {
        $user_type = auth()->user()->user_type;

        Auth::logout();

        if ($user_type == 'admin') {
            return redirect()->route('auth_login');
        } else {
            return redirect()->route('public_login');
        }
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ]);

            $newUser = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'user_type' => 'public',
                'referer_id' => $request->referer_id ?? null,
                'refer_code' => uniqid()
            ]);
            Wallet::create([
                'user_id' => $newUser->id,
            ]);

            $digits = 5;
            $otp_code = rand(pow(10, $digits - 1), pow(10, $digits) - 1);

            $otp = new Otp();
            $otp->email = $request->email;
            $otp->otp = $otp_code;
            $otp->failed_attempt = 0;
            $otp->save();
            session(['email' => $request->email]);

            $user_data = User::where('email', $request->email)->first();
            $token = hash('sha256', time());   
            $user_data->remember_token = $token;
            $user_data->update();   
            $message = 'This is your verify otp: ' .$otp_code;    
            \Mail::to($request->email)->send(new Websitemail('OTP Send', $message));
            return redirect()->route('otp')->with('message', 'Please Check Your Email Address');
                  
        } else {
            return view('front-end.auth.register');
        }
    }

    public function registerWithRefer($username)
    {
        $check = User::where('username', $username)->first();

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
        return view('front-end.auth.forget-password');
    }
}
