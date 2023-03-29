<?php

namespace App\Http\Controllers\user;

use App\Events\RoyaltyTransactionEvent;
use App\Events\StakingTransactionEvent;
use App\Models\Rank;
use App\Models\User;
use App\Models\Wallet;
use App\Models\UserStake;
use App\Models\IbRoyality;
use App\Models\StakingRoi;
use App\Jobs\RankRefreshJob;
use Illuminate\Http\Request;
use App\Models\StakingRebate;
use App\Models\StakingRebateBonus;
use App\Http\Controllers\Controller;
use App\Jobs\LeadMemberRankRefreshJob;
use App\Models\Transaction;
use Stripe\Transfer;

class StakeController extends Controller
{
    public function stake(Request $request)
    {
        if ($request->isMethod('post')) {
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

            // user can stake from bonus amount but can not wirhdraw from bonus amount
            $wallet->main_amount -= $request->amount;
            if ($request->amount > $wallet->withdrawable_amount) {
                $wallet->withdrawable_amount = 0;
                $wallet->bonus_amount -= $request->amount - $wallet->withdrawable_amount;
            } else {
                $wallet->withdrawable_amount -= $request->amount;
            }
            $wallet->save();

            $details['user_id'] = auth()->id();
            $details['amount'] = $request->amount;

            dispatch(new RankRefreshJob($details));
            // dispatch(new LeadMemberRankRefreshJob($details))->delay(120);

            return redirect()->route('public_history')->with('message', 'Successfully created.'); # code...
        } else {

            $user = auth()->user();
            $staking = StakingRoi::where('status', 1)->get();
            $wallet = Wallet::where('user_id', auth()->id())->first();
            return view('back-end.public.stake.stake',  compact('staking', 'wallet', 'user'));
        }
    }

    public function fetchStakeHistoryData(Request $request)
    {
        if ($request->ajax()) {
            $stakes = UserStake::where('user_id', auth()->id())->paginate(5);
            return view('back-end.public.stake.stake-history', compact('stakes'))->render();
        }
    }

    public function distributeStakingBonusSchedule()
    {
        $userStakes = UserStake::where('status', 1)->where('next_payout', date('Y-m-d'))->get();

        foreach ($userStakes as $stake) {
            $stakeRebate = new StakingRebate();
            $stakeRebate->user_id = $stake->user_id;
            $stakeRebate->user_stake_id = $stake->id;
            $stakeRebate->amount = $stake->amount_per_month;
            $stakeRebate->date = today();

            $stake->completed++;
            if ($stake->completed == $stake->duration) {
                $stake->status = 2;
                $stake->next_payout = null;
                $stakeRebate->next_payout = null;
            } else {
                $stake->next_payout = today()->addMonth();
                $stakeRebate->next_payout = today()->addMonth();
            }

            $stakeRebate->user_id = $stake->user_id;

            $wallet = Wallet::where('user_id', $stake->user_id)->first();
            $wallet->main_amount += $stake->amount_per_month;
            $wallet->withdrawable_amount += $stake->amount_per_month;
            $wallet->total_earning += $stake->amount_per_month;

            $stake->save();
            $stakeRebate->save();
            $wallet->save();

            StakingTransactionEvent::dispatch($stake);

            $this->genBonusDispatch($stakeRebate, $stake->user_id);
        }

        return true;
    }

    public function genBonusDispatch($stakeRebate, $user_id, $gen = 1, $level = 1)
    {
        $user = User::find($user_id);
        if ($user->referer_id) {
            $ref_rank = Rank::where('user_id', $user->referer_id)->first();
            if (isset($ref_rank->rank_id) && $ref_rank->rank_id == $gen) {

                $stakeRebateBonus = new StakingRebateBonus();
                $stakeRebateBonus->user_id = $user->referer_id;
                $stakeRebateBonus->bonus_from = $stakeRebate->user_id;
                $stakeRebateBonus->user_stake_id = $stakeRebate->user_stake_id;

                $bonus_amount = $this->ibAmountCalculation($stakeRebate->amount, $ref_rank->rank_id);

                $stakeRebateBonus->amount = $bonus_amount;
                $stakeRebateBonus->date = today();
                $stakeRebateBonus->generation = $gen;
                $stakeRebateBonus->level = $level;
                $stakeRebateBonus->save();

                $wallet = Wallet::where('user_id', $user->referer_id)->first();
                $wallet->main_amount += $bonus_amount;
                $wallet->withdrawable_amount += $bonus_amount;
                $wallet->total_earning += $bonus_amount;
                $wallet->save();

                $bonus['user_id'] = $stakeRebateBonus->user_id;
                $bonus['amount_per_month'] = $stakeRebateBonus->amount;
                $bonus['id'] = $stakeRebateBonus->id;
                $bonus['from_user_id'] = $stakeRebateBonus->bonus_from;
                $bonus['royalty_gen'] = $stakeRebateBonus->generation;
                $bonus['royalty_level'] = $stakeRebateBonus->level;

                RoyaltyTransactionEvent::dispatch($bonus);

                $gen++;
            }
            $level++;

            $this->genBonusDispatch($stakeRebate, $user->referer_id, $gen, $level);
        }

        return true;
    }

    public function ibAmountCalculation($distribution_amount, $rank)
    {
        $ibRoyalties = IbRoyality::where('rank_id', $rank)->first();

        if ($ibRoyalties) {
            return ($distribution_amount * $ibRoyalties->percentage) / 100;
        } else {
            return false;
        }
    }
}
