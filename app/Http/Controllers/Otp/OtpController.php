<?php

namespace App\Http\Controllers\Otp;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Otp;
use App\Mail\Websitemail;

use Auth;


class OtpController extends Controller
{
    public function otpPublic()
    {
        return view('front-end.auth.otp');
    }

    public function verify(Request $request)
    {
        $otp = $request->otp;
        $email = session('email');
        $otp_info = Otp::where('email', $email)->first();

        if ($otp_info->otp == $otp) {
            $newUser = User::where('email', $otp_info->email)->first();
            Auth::login($newUser);
            $request->session()->forget('email');
            $request->session()->regenerate();
            return redirect()->route('public_dashboard');
        } else {
            if ($otp_info->failed_attempt > 3) {
                $time = strtotime('now');
                if ($otp_info->suspend_duration < 1) {
                    $endTime = strtotime(date("H:i", strtotime('+30 minutes', $time)));
                    $otp_info->suspend_duration = $endTime;
                    $otp_info->otp = 0;
                    $otp_info->save();
                    return redirect()->back()->with('error', 'You are suspended for 30 minute');
                } else if ($time > $otp_info->suspend_duration) {
                    $newUser = User::where('email', $otp_info->email)->first();
                    $newUser->delete();
                    $otp_info->delete();
                    return redirect()->back()->with('success', 'You are now able to register again');
                } else {
                    return redirect()->back()->with('error', 'You are suspended for 30 minute'); //--kore dekhate hobe
                }
            } else {
                $otp_info->failed_attempt = $otp_info->failed_attempt + 1;
                $otp_info->save();
                return redirect()->back()->with('error', 'Otp not found!');
            }
        }

        $user_data = User::where('email', $request->email)->first();
        if (!$user_data) {
            return redirect()->back()->with('error', 'Email address not found!');
        }

        $token = hash('sha256', time());

        $user_data->remember_token = $token;
        $user_data->update();

        $reset_link = url('otp/' . $token . '/' . $request->email);
        $subject = 'Send Otp';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="' . $reset_link . '">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('register')->with('success', 'Please check your email');
    }
}
