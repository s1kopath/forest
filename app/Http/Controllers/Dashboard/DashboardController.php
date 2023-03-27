<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\JoiningBonusEvent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\FundController;
use App\Models\Rank;
use App\Models\User;
use App\Models\UserStake;
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

        return view('back-end.dashboard', compact('user_count', 'ib_count', 'total_staking', 'user_count_last_month', 'ib_count_last_month', 'total_staking_last_month'));
    }

    public function manageUsers()
    {
        $users = User::where('user_type', 'public')->orderBy('id', 'desc')->paginate(10);
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
}
