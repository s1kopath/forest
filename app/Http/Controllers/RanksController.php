<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmountForIbGain;
use App\Models\Rank;
use App\Models\User;
use App\Models\UserStake;
use Illuminate\Support\Facades\DB;

class RanksController extends Controller
{
    public function rank_calculation($user_id)
    {
        $ib_payment_info = AmountForIbGain::where('user_id', $user_id)->first();

        $ib_payment_info->direct_amount = $this->direct_total_calculate($user_id) ?? 0;
        $ib_payment_info->team_amount =  $this->team_total_calculate($user_id) ?? 0;
        $ib_payment_info->save();

        $rank_info = Rank::where('user_id', $user_id)->first();

        if ($ib_payment_info->self_amount >= 1000 && $ib_payment_info->direct_amount >= 10000 && $ib_payment_info->team_amount >= 50000) {
            if ($rank_info) {
                // 'Corporate IB' id = 4
                $this->rank_update($rank_info, 4);
            } else {
                $this->rank_create($user_id, 4);
            }
        } else if ($ib_payment_info->self_amount >= 500 && $ib_payment_info->direct_amount >= 5000 && $ib_payment_info->team_amount >= 10000) {
            if ($rank_info) {
                // 'Master IB' id=3
                $this->rank_update($rank_info, 3);
            } else {
                $this->rank_create($user_id, 3);
            }
        } else if ($ib_payment_info->self_amount >= 100 && $ib_payment_info->direct_amount >= 1000 && $ib_payment_info->team_amount >= 5000) {
            if ($rank_info) {
                // 'Pro-IB' id=2
                $this->rank_update($rank_info, 2);
            } else {
                $this->rank_create($user_id, 2);
            }
        } else if ($ib_payment_info->self_amount >= 50 && $ib_payment_info->direct_amount >= 300 && $ib_payment_info->team_amount >= 1000) {
            if ($rank_info) {
                // 'IB' id=1
                $this->rank_update($rank_info, 1);
            } else {
                $this->rank_create($user_id, 1);
            }
        }

        return true;
    }

    public function rank_create($user_id, $rank_id)
    {
        $rank_info = new Rank();
        $rank_info->user_id = $user_id;
        $rank_info->rank_id = $rank_id;
        $rank_info->save();

        return true;
    }

    public function rank_update($rank_info, $rank_id)
    {
        $rank_info->rank_id = $rank_id;
        $rank_info->save();

        return true;
    }

    public function direct_total_calculate($user_id)
    {
        $user = User::find($user_id);
        $ids = implode(',', $user->direct_team);
        if ($ids == "") {
            return 0;
        } else {
            $total = DB::select("SELECT SUM(amount) as total FROM user_stakes where user_id IN($ids)");
            return $total[0]->total;
        }
    }

    public function team_total_calculate($user_id)
    {
        $user = User::find($user_id);

        $ids = implode(',', $user->total_team);

        if ($ids == "") {
            return 0;
        } else {
            $total = DB::select("SELECT SUM(amount) as total FROM user_stakes where user_id IN($ids)");
            return $total[0]->total;
        }
    }

    public function rank_refresh_with_ib_gain($user_id, $amount)
    {

        $amountForIb = AmountForIbGain::where('user_id', $user_id)->first();
        $amountForIb->self_amount += $amount;
        $amountForIb->save();

        $this->rank_calculation($user_id);

        return true;
    }


    public function team_rank_refresh_with_ib_gain($user_id, $amount)
    {
        $user = User::find($user_id);
        if ($user->userToReferer) {
            $this->rank_refresh_with_ib_gain($user->userToReferer->id, $amount);
            $this->team_rank_refresh_with_ib_gain($user_id, $amount);
        }

        return true;
    }
}
