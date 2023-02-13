<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AmountForIbGain;
use App\Models\Rank;

class RanksController extends Controller
{
    public function rank_calculation(Request $request)
    {
        $ib_payment_info = AmountForIbGain::where('user_id', Auth::user()->id)->first();

        $rank_info = Rank::where('user_id', Auth::user()->id);
        if ($ib_payment_info->self_amount >= 1000 && $ib_payment_info->direct_amount >= 10000 && $ib_payment_info->team_amount >= 50000 - $ib_payment_info->direct_amount) {
            if ($rank_info) {
                $this->rank_update($rank_info, 'Corporate IB');
            } else {
                $this->rank_create('Corporate IB');
            }
        } else if ($ib_payment_info->self_amount >= 500 && $ib_payment_info->direct_amount >= 5000 && $ib_payment_info->team_amount >= 10000 - $ib_payment_info->direct_amount) {
            if ($rank_info) {
                $this->rank_update($rank_info, 'Master IB');
            } else {
                $this->rank_create('Master IB');
            }
        } else if ($ib_payment_info->self_amount >= 100 && $ib_payment_info->direct_amount >= 1000 && $ib_payment_info->team_amount >= 5000 - $ib_payment_info->direct_amount) {
            if ($rank_info) {
                $this->rank_update($rank_info, 'Pro-IB');
            } else {
                $this->rank_create('Pro-IB');
            }
        } else if ($ib_payment_info->self_amount >= 50 && $ib_payment_info->direct_amount >= 300 && $ib_payment_info->team_amount >= 1000 - $ib_payment_info->direct_amount) {
            if ($rank_info) {
                $this->rank_update($rank_info, 'IB');
            } else {
                $this->rank_create('IB');
            }
        }
    }

    public function rank_create($rank)
    {
        $rank_info = new Rank();
        $rank_info->user_id = Auth::user()->id;
        $rank_info->rank = $rank;
        $rank_info->save();
    }

    public function rank_update($rank_info, $rank)
    {
        $rank_info->rank = $rank;
        $rank_info->save();
    }
}
