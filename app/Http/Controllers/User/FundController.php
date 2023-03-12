<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\StakingRoi;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function fund()
    {
        $user = auth()->user();
        $staking = StakingRoi::where('status', 1)->get();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        return view('back-end.public.fund.fund', compact('staking', 'wallet', 'user'));
    }

    public function deposit($amount)
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $wallet->main_amount += $amount;
        $wallet->withdrawable_amount += $amount;

        $wallet->save();
        
        return true;
    }
}
