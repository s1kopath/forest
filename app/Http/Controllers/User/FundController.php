<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function fund()
    {
        return view('back-end.public-fund.fund');
    }
}
