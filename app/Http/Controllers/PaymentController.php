<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AmountForIbGain;
use App\Models\StakingRoi;
use App\Models\Gift;
use App\Models\TeamDetail;
use App\Models\Rank;
use App\Models\User;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $new_payment = new Payment();
        $new_payment->user_id = Auth::user()->id;
        $new_payment->amount = $request->amount;
        $new_payment->staking_roi_id = $request->staking_roi_id;
        $new_payment->type = $request->type; //should be dynamic
        $new_payment->save();

        if ($request->type == 'direct') { //should be changed
            $invg = new Gift();
            $invg->user_id = Auth::user()->id;
            $invg->amount = ($request->amount * 5) / 100; //suppose 5%
            $invg->type = 'invitation_gift';
            $invg->save();
            //Send payment via payment gateway
        }

        $ib_payment_info = AmountForIbGain::where('user_id', Auth::user()->id)->first();

        if ($ib_payment_info) {
            $ib_payment_info->self_amount = $ib_payment_info->self_amount + $request->amount;
        } else {
            $ib_payment_info = new AmountForIbGain();
            $ib_payment_info->self_amount = $request->amount;
        }
        $ib_payment_info->save();
    }

    public function payout() //Function will be monthly distribution
    {
        $payment_info = Payment::where('user_id', Auth::user()->id)->get();
        $payout_percentage = StakingRoi::find($payment_info->staking_roi_id)->percentage;
        $payout_amount = ($payment_info->amount * $payout_percentage) / 100;
        $distribution_amount = ($payout_amount * 3.5) / 100; //suppose 3.5
        $actual_payout_amount =  $payout_amount -  $distribution_amount; //Will be save and and mail
        $team_details = TeamDetail::whereIn('level', [1, 2, 3, 4])->where('referer_id', $payment_info->user_id)->get();

        foreach ($team_details as $team_detail) {
            if ($team_detail->level == 1) {
                $amount = $this->ibAmountCalculation($distribution_amount, $team_detail);
            } else if ($team_detail->level == 2) {
                $amount = $this->ibAmountCalculation($distribution_amount, $team_detail);
            } else if ($team_detail->level == 3) {
                $amount = $this->ibAmountCalculation($distribution_amount, $team_detail);
            } else if ($team_detail->level == 4) {
                $amount = $this->ibAmountCalculation($distribution_amount, $team_detail);
            }
        }
    }


}
