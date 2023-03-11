<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Otp;
use App\Models\Rank;
use App\Models\User;
use App\Models\Wallet;
use App\Jobs\SendEmailJob;
use App\Jobs\VerifyEmailJob;
use Illuminate\Http\Request;
use App\Jobs\TempOtpRemoverJob;
use App\Models\AmountForIbGain;
use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

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

    public function verificationNotice()
    {
        return view('front-end.auth.verification-notice');
    }

    public function resendLink(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && $user->email_verified_at) {
            return redirect()->route('public_login')->with('error', 'Email already verified!');
        } else {
            $otp = Otp::where('email', $request->email)->first();

            if ($otp) {
                if ($otp->resent_count >= 3) {
                    return redirect()->route('forget_password')->with('error', 'Too many attempts, try resetting your account!');
                } else {
                    $otp->resent_count++;
                    $otp->save();

                    session(['resent_count' => $otp->resent_count]);

                    $message = url('/') . '/verify/' . $otp->token;

                    $details['email'] = $request->email;
                    $details['message'] = $message;

                    dispatch(new VerifyEmailJob($details));

                    return redirect()->back()->with('message', 'Successfully resend!');
                }
            } else {
                return redirect()->route('register')->with('error', 'User not found!');
            }
        }
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

            $newDetails = UserDetail::create([
                'user_id' => $newUser->id,
            ]);

            $newWallet = Wallet::create([
                'user_id' => $newUser->id,
            ]);

            $newRank = Rank::create([
                'user_id' => $newUser->id,
            ]);

            $newIpGain = AmountForIbGain::create([
                'user_id' => $newUser->id,
            ]);

            session(['email' => $request->email]);
            session()->forget('resent_count');

            $user_data = User::where('email', $request->email)->first();
            $token = hash('sha256', time());
            $user_data->remember_token = $token;
            $user_data->update();

            $otp = new Otp();
            $otp->email = $request->email;
            $otp->token = $token;
            $otp->failed_attempt = 0;
            $otp->save();

            $message = url('/') . '/verify/' . $token;

            $details['email'] = $request->email;
            $details['message'] = $message;

            dispatch(new VerifyEmailJob($details));

            return redirect()->route('verification.notice')->with('message', 'Email sent!');
        } else {
            return view('front-end.auth.register');
        }
    }

    // public function resendOtp()
    // {
    //     $otp = Otp::where('email', session('email'))->first();

    //     if ($otp) {
    //         $otp_code = otp_generator();

    //         if ($otp->resent_count > 3) {

    //             $otp->resent_count++;
    //             $otp->save();

    //             return back()->with('message', 'Too many attempts, please try again after sometimes.');
    //         }

    //         if ($otp->resent_count == 3) {
    //             $otpDetails['id'] = $otp->id;

    //             $otp->resent_count++;
    //             $otp->save();

    //             // user can resend again in 30min
    //             dispatch(new TempOtpRemoverJob($otpDetails))->delay(1800);

    //             return back()->with('message', 'Too many attempts, please try again after sometimes.');
    //         }


    //         $otp->otp = $otp_code;
    //         $otp->failed_attempt = 0;
    //         $otp->resent_count++;
    //         $otp->save();

    //         $message = 'This is your verification code: ' . $otp_code;

    //         $details['email'] = session('email');
    //         $details['message'] = $message;
    //         $details['subject'] = 'OTP Code';

    //         dispatch(new SendEmailJob($details));

    //         return redirect()->back()->with('message', 'Your Otp successfully resend!');
    //     } else {
    //         return redirect()->route('register')->with('message', 'User not found!');
    //     }
    // }

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

    public function verifyEmail($token)
    {
        $otp = Otp::where('token', $token)->first();
        if ($otp) {
            $user = User::where('email', $otp->email)->first();
            if ($user) {
                $user->email_verified_at = now();
                $user->save();

                $otp->delete();
                session()->forget('resent_count');
                session()->forget('email');

                Auth::login($user);

                return redirect()->route('public_dashboard')->with('message', 'Email successfully verified!');
            }
        } else {
            return redirect()->route('register')->with('error', 'Invalid url!');
        }
    }
}
