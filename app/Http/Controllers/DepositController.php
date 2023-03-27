<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Events\DepositTransactionEvent;
use App\Http\Controllers\User\FundController;

class DepositController extends Controller
{
    public function manageDeposits()
    {
        $deposits = Deposit::with(['user_details', 'approved_by_user'])->orderBy('id', 'desc')->paginate(10);

        return view('back-end.deposit.manage-deposits', compact('deposits'));
    }

    public function approveDeposits($id, $status)
    {
        $deposit = Deposit::find($id);
        if ($deposit->status == $status) {
            return back()->with('error', 'Already updated!');
        } else {
            $deposit->status = $status;
            $deposit->approved_by = auth()->id();
            $deposit->approved_on = now();
            $deposit->save();

            $fundController = new FundController();
            $fundController->deposit($deposit->amount, $deposit->user_id);

            $details['user_id'] = $deposit->user_id;
            $details['amount'] = $deposit->amount;
            $details['payment_gateway'] = 'Crypto';
            $details['type'] = 'Credit';
            $details['purpose'] = 'Deposit';
            $details['reference_number'] = $deposit->id;

            DepositTransactionEvent::dispatch($details);

            return back()->with('message', 'Updated successfully!');
        }
    }
}
