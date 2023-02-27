<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmountForIbGain;
use App\Http\Controllers\RanksController;

class TestController extends Controller
{
    public function test()
    {
        // $chargePer1000 = 20;
        // $chargeAfter1000 = 5;

        // $withdraw_amount = 2110;

        // $total_charge = (round($withdraw_amount / 1000) * $chargePer1000) + $chargeAfter1000;

        $ids = implode(',', auth()->user()->direct_team);

        dd($ids == "");
        abort(500);
        return view('test');
        // return view('front-end.section.content.test');
    }
}
