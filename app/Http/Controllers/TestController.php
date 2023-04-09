<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\User;
use App\Models\Wallet;
use App\Models\UserStake;
use App\Models\IbRoyality;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\StakingRebate;
use App\Models\AmountForIbGain;
use App\Models\StakingRebateBonus;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\user\StakeController;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function test()
    {
        $response = Http::get('https://api.first.org/data/v1/countries');
        dd(array_values($response->json()['data'])[0]['country']);
        return view('test');
        //Redirect user to the payment page
        // dd('200');
        // abort(500);
    }
}
