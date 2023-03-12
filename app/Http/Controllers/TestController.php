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

class TestController extends Controller
{
    public function test(){

        $stakeController = new StakeController();
        $data = $stakeController->distributeStakingBonusSchedule();
        dd($data);
        return view('test');
        $random = Str::random(10);
        // dd($random);
        abort(500);
    }
}
