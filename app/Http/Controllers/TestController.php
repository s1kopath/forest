<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmountForIbGain;
use App\Http\Controllers\RanksController;
use App\Models\IbRoyality;
use App\Models\Rank;
use App\Models\StakingRebate;
use App\Models\StakingRebateBonus;
use App\Models\User;
use App\Models\UserStake;
use App\Models\Wallet;

class TestController extends Controller
{
    public function test(){
        abort(500);
    }
}
