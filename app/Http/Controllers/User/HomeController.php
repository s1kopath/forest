<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('front-end.index');
    }

    public function homepage2()
    {
        return view('front-end.section.content.test');
    }

    public function markets()
    {
        return view('front-end.section.content.markets.markets');
    }

    public function about()
    {
        return view('front-end.section.content.about.about');
    }
}
