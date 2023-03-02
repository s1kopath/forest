<?php

namespace App\Http\Controllers\Otp;

use App\Models\Otp;

use App\Models\User;
use App\Mail\WebsiteMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\User\FundController;

class OtpController extends Controller
{
    // public function otpPublic()
    // {
    //     return view('front-end.auth.otp');
    // }

    // public function verify(Request $request)
    // {
    //     $otp = $request->otp;
    //     $email = session('email');
    //     $otp_info = Otp::where('email', $email)->first();

    //     if ($otp_info->otp == $otp) {
    //         $newUser = User::where('email', $otp_info->email)->first();
    //         $newUser->update([
    //             'email_verified_at' => now()
    //         ]);

    //         session()->forget('email');
    //         session()->forget('failed_attempt');
    //         session()->forget('last_attempted');

    //         Auth::login($newUser);
    //         $request->session()->regenerate();

    //         $otp_info->delete();

    //         return redirect()->route('public_dashboard');
    //     } else {
    //         if ($otp_info->failed_attempt > 3) {
    //             $time = strtotime('now');
    //             if ($otp_info->suspend_duration < 1) {
    //                 $endTime = strtotime(date("H:i", strtotime('+30 minutes', $time)));
    //                 $otp_info->suspend_duration = $endTime;
    //                 $otp_info->otp = otp_generator();
    //                 $otp_info->save();

    //                 return redirect()->back()->with('error', 'You are suspended for 30 minute');
    //             } else if ($time > $otp_info->suspend_duration) {

    //                 $newUser = User::where('email', $otp_info->email)->first();
    //                 $newUser->delete();
    //                 $otp_info->delete();

    //                 return redirect()->route('register')->with('success', 'You are now able to register again');
    //             } else {
    //                 return redirect()->back()->with('error', 'You are suspended for 30 minute');
    //             }
    //         } else {
    //             $otp_info->failed_attempt = $otp_info->failed_attempt + 1;
    //             $otp_info->save();

    //             session(['failed_attempt' => $otp_info->failed_attempt]);

    //             if ($otp_info->failed_attempt >= 4) {
    //                 session(['last_attempted' => $otp_info->updated_at]);
    //             }

    //             return redirect()->back()->with('error', 'Otp not found!');
    //         }
    //     }
    // }
}
