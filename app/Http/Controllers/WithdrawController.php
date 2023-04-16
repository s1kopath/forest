<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Events\WithdrawTransactionEvent;
use App\Http\Controllers\user\FundController;

class WithdrawController extends Controller
{
    public function manageWithdraw(Request $request)
    {
        $query = Withdraw::query()->with(['user_details', 'approved_by_user']);

        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->whereIn('user_id', function ($qry) use ($keyword) {
                $qry->select('id')
                    ->from('users')
                    ->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('username', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%');
            });

            $query->orWhere('trx_id', $keyword);
        }

        $withdraws = $query->latest()->paginate(10);


        return view('back-end.withdraw.manage-withdraws', compact('withdraws'));
    }

    public function withdrawHistory(Request $request)
    {
        $query = Withdraw::query()->with(['user_details', 'approved_by_user'])->whereStatus(1);

        if ($request->from && $request->to) {
            $query->whereDate('created_at', '>=', $request->from)->whereDate('created_at', '<=', $request->to);
        }

        $total = $query->sum('net_amount');

        $withdraws = $query->latest()->paginate(10);


        return view('back-end.withdraw.withdraw-history', compact('withdraws', 'total'));
    }

    public function approveWithdraw($id, $status)
    {
        $withdraw = Withdraw::find($id);
        if ($withdraw->status == $status) {
            return back()->with('error', 'Already updated!');
        } else {
            if ($status == 1) {
                $withdraw->status = $status;
                $withdraw->approved_by = auth()->id();
                $withdraw->approved_on = now();
                $withdraw->save();


                $details['user_id'] = $withdraw->user_id;
                $details['amount'] = $withdraw->amount;
                $details['payment_gateway'] = $withdraw->payment_method;
                $details['type'] = 'Debit';
                $details['purpose'] = 'Withdraw';
                $details['reference_number'] = $withdraw->id;

                WithdrawTransactionEvent::dispatch($details);

                return back()->with('message', 'Updated successfully!');
            } elseif ($status == 2) {
                $withdraw->status = $status;
                $withdraw->approved_by = auth()->id();
                $withdraw->approved_on = now();
                $withdraw->save();

                $wallet = Wallet::where('user_id', $withdraw->user_id)->first();

                $wallet->main_amount += $withdraw->amount;
                $wallet->withdrawable_amount += $withdraw->amount;
                $wallet->save();

                return back()->with('message', 'Updated successfully!');
            } else {
                return back()->with('error', 'Something Went wrong!');
            }
        }
    }
}
