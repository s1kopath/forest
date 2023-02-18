<?php

namespace App\Http\Controllers\Otp;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\Websitemail;

class OtpController extends Controller
{
    public function otpPublic()
    {
        return view('front-end.auth.otp');
    }

    public function verify(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email'
        ]);

        $user_data = User::where('email',$request->email)->first();
        if(!$user_data) {
            return redirect()->back()->with('error','Email address not found!');
        }

        $token = hash('sha256',time());

        $user_data->remember_token = $token;
        $user_data->update();

        $reset_link = url('otp/'.$token.'/'.$request->email);
        $subject = 'Send Otp';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="'.$reset_link.'">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('register')->with('success','Please check your email');
    }
}
