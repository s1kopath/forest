<?php

namespace App\Http\Controllers\Otp;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class OtpController extends Controller
{
    public function otpPublic()
    {
        return view('front-end.auth.otp');
    }


}
