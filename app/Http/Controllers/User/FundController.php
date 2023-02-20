<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\StakingRoi;
use App\Models\Wallet;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function fund()
    {
        $staking = StakingRoi::where('status', 1)->get();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        return view('back-end.public.fund.fund', compact('staking', 'wallet'));
    }
}
