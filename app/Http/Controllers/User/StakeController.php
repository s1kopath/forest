<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\StakingRoi;
use App\Models\UserStake;
use App\Models\Wallet;
use Illuminate\Http\Request;

class StakeController extends Controller
{
    public function stake(Request $request)
    {
        $request->validate([
            'staking_package' => 'required',
            'amount' => 'required|numeric|min:50',
        ]);

        $wallet = Wallet::where('user_id', auth()->id())->first();
        if ($wallet->main_amount < $request->amount) {
            return back()->with('message', 'Invalid amount.');
        }
        $staking = StakingRoi::find($request->staking_package);

        $newStake = UserStake::create([
            'user_id' => auth()->id(),
            'staking_rois_id' => $staking->id,
            'amount' => $request->amount,
            'duration' => $staking->duration,
            'amount_per_month' => ($request->amount * $staking->duration) / 100,
            'completed' => 0,
            'percentage' => $staking->percentage,
            'start_date' => now(),
            'end_date' => now()->addMonths($staking->duration),
            'next_payout' => now()->addMonth(),
        ]);
        $wallet->main_amount = $wallet->main_amount - $request->amount;
        $wallet->save();

        return back()->with('message', 'Successfully created.');
    }
}
