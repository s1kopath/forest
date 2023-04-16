<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\JoiningBonusEvent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\FundController;
use App\Models\Deposit;
use App\Models\Rank;
use App\Models\User;
use App\Models\UserStake;
use App\Models\HeaderNotice;
use App\Models\Ticket;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $last_month = now()->subMonth()->month;

        $users = User::where('user_type', 'public');
        $user_count = $users->count();
        $user_count_last_month = $users->whereMonth('created_at', $last_month)->count();


        $ib = Rank::whereNotNull('rank_id');
        $ib_count = $ib->count();
        $ib_count_last_month = $ib->whereMonth('created_at', $last_month)->count();

        $total_staking = UserStake::sum('amount');
        $total_staking_last_month = UserStake::whereMonth('created_at', $last_month)->sum('amount');

        $support_ticket = Ticket::query();
        $support['total_support_ticket'] = $support_ticket->count();
        $support['pending_support_ticket'] = $support_ticket->whereStatus(0)->count();
        $support['total_public_support_ticket'] = $support_ticket->whereType('public')->count();
        $support['total_private_support_ticket'] = $support_ticket->whereType('private')->count();

        $amounts['deposit'] = Deposit::whereStatus(1)->sum('amount');
        $amounts['pendingDeposit'] = Deposit::whereStatus(0)->sum('amount');
        $amounts['withdraw'] = Withdraw::whereStatus(1)->sum('amount');
        $amounts['pendingWithdraw'] = Withdraw::whereStatus(0)->sum('amount');

        return view('back-end.dashboard', compact('support', 'amounts', 'user_count', 'ib_count', 'total_staking', 'user_count_last_month', 'ib_count_last_month', 'total_staking_last_month'));
    }

    public function manageUsers(Request $request)
    {
        $query = User::query();

        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->whereIn('id', function ($qry) use ($keyword) {
                $qry->select('id')
                    ->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('username', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%');
            });
        }

        $users = $query->where('user_type', 'public')
            ->latest()
            ->paginate(10);

        return view('back-end.users.manage-users', compact('users'));
    }

    public function inspectUser($user_id)
    {
        $user = User::with('userToUserDetails')->where('id', $user_id)->first();
        return view('back-end.users.user-details', compact('user'));
    }

    public function verifyUser($user_id, $status)
    {
        if ($status == 1) {
            $user = User::find($user_id);
            if ($user->is_verified) {
                return back()->with('error', 'Already verified.');
            } else {
                JoiningBonusEvent::dispatch($user_id);

                $user->is_verified = 1;
                $user->save();

                return back()->with('message', 'Successfully updated.');
            }
        } else {
            return back()->with('warning', 'Something went wrong.');
        }
    }

    public function createNotice(Request $request)
    {
        $marquee = HeaderNotice::first();
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'body' => 'required',
                'status' => 'required',
            ]);

            if ($marquee) {
                $marquee->body = $request->body;
                $marquee->status = $request->status;
                $marquee->save();
            } else {
                $newMarquee = new HeaderNotice();
                $newMarquee->body = $request->body;
                $newMarquee->status = $request->status;
                $newMarquee->save();
            }

            return redirect()->back()->with('message', 'Notice Added Successfully.');
        } else {
            return view('back-end.notice.create-dashboard-notice', compact('marquee'));
        }
    }
}
