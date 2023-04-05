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

class TestController extends Controller
{
    public function test()
    {
        return view('test');
        //Redirect user to the payment page
        // dd('200');
        // abort(500);
    }
}
