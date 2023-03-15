<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Image;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('front-end.index');
    }

    public function markets()
    {
        return view('front-end.section.content.markets.markets');
    }

    public function about()
    {
        return view('front-end.section.content.about.about');
    }

    public function blog()
    {
        return view('front-end.section.content.blog.blog');
    }

    public function careers()
    {
        return view('front-end.section.content.careers.careers');
    }

    public function contact()
    {
        return view('front-end.section.content.contact.contact');
    }

    public function education()
    {
        return view('front-end.section.content.education.education');
    }

    public function helpCenter()
    {
        return view('front-end.section.content.help-center.help-center');
    }

    public function customers()
    {
        return view('front-end.section.content.customers.customers');
    }

    public function roadMap()
    {
        return view('front-end.section.content.road-map.road-map');
    }

    public function legalDocs()
    {
        return view('front-end.section.content.legal-docs.legal-docs');
    }
    public function staking()
    {
        return view('front-end.section.content.product.staking');
    }
    public function forexTrading()
    {
        return view('front-end.section.content.product.forex_trading');
    }
    public function ECommerce()
    {
        return view('front-end.section.content.product.ecommerce');
    }
    public function forexBroker()
    {
        return view('front-end.section.content.product.forex_broker');
    }
    public function allTraders()
    {
        return view('front-end.section.content.traders.all-traders');
    }
}
