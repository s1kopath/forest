<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UserDetail;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\User\StakeController;
use App\Models\AmountForIbGain;
use App\Models\UserStake;
use App\Models\Wallet;
use Illuminate\Http\Request;

class PublicDashboardController extends Controller
{
    public function publicDashboard()
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $totalStake = UserStake::where('user_id', auth()->id())->sum('amount');

        return view('back-end.dashboard-public', compact('wallet', 'totalStake'));
    }

    public function publicProfile()
    {
        $user = User::with('userToUserDetails')->where('id', auth()->id())->first();
        $userDetail = UserDetail::where('user_id', auth()->id())->first();

        return view('back-end.public.profile.profile', compact('user', 'userDetail'));
    }

    public function updatePublicProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'nullable',
            'identity_number' => 'nullable',
            'date_of_birth' => 'nullable',
        ]);

        $user = User::where('id', auth()->id())->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        UserDetail::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'phone_number' => $request->phone_number,
            'identity_number' => $request->identity_number,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return back()->with('message', 'updated successfully.');
    }

    public function editLocation(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'house_no' => 'nullable',
                'street' => 'nullable',
                'city' => 'nullable',
                'country' => 'nullable',
                'zip_code' => 'nullable'
            ]);
            $userDetail = UserDetail::where('user_id', auth()->id())->first();

            $userDetail->updateOrCreate([
                'user_id' => auth()->id()
            ], [
                'house_no' => $request->house_no,
                'street' => $request->street,
                'city' => $request->city,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
            ]);

            return back()->with('message', 'updated successfully.');
        } else {
            return view('back-end.public.profile.profile');
        }
    }



    public function history()
    {
        $stakes = UserStake::where('user_id', auth()->id())->get();
        return view('back-end.public.history.history', compact('stakes'));
    }

    public function downloads()
    {
        return view('back-end.public.downloads.downloads');
    }

    public function referrals()
    {
        $user = User::with('children')->where('id', auth()->id())->first();
        return view('back-end.public.referrals.referrals', compact('user'));
    }

    public function becomeAnIb()
    {
        $ranksController = new RanksController();
        $ranksController->rank_calculation(auth()->id());

        $ib_gain = AmountForIbGain::where('user_id', auth()->id())->first();
        $rank = auth()->user()->userToRank->rank_id;


        $gained_percentage1 = 0;
        if ($ib_gain->self_amount >= 50 && $ib_gain->direct_amount >= 300 && $ib_gain->team_amount >= 1000) {
            $gained_percentage1 = 100;
        } elseif ($ib_gain->self_amount >= 50 && $ib_gain->direct_amount < 300 && $ib_gain->team_amount < 1000) {
            $self = 40;
            $direct = ($ib_gain->direct_amount * 100) / 300;
            $team = ($ib_gain->team_amount * 100) / 1000;
            $gained_percentage1 = ($self + $direct + $team);
        } elseif ($ib_gain->self_amount >= 50 && $ib_gain->direct_amount >= 300 && $ib_gain->team_amount < 1000) {
            $self = 40;
            $direct = 30;
            $team = ($ib_gain->team_amount * 100) / 1000;
            $gained_percentage1 = ($self + $direct + $team);
        } else {
            $self = ($ib_gain->self_amount * 100) / 50;
            $direct = ($ib_gain->direct_amount * 100) / 300;
            $team = ($ib_gain->team_amount * 100) / 1000;
            $gained_percentage1 = ($self + $direct + $team);
        }


        $gained_percentage2 = 0;
        if ($ib_gain->self_amount >= 100 && $ib_gain->direct_amount >= 1000 && $ib_gain->team_amount >= 5000) {
            $gained_percentage2 = 100;
        } elseif ($ib_gain->self_amount >= 100 && $ib_gain->direct_amount < 1000 && $ib_gain->team_amount < 5000) {
            $self = 40;
            $direct = ($ib_gain->direct_amount * 100) / 1000;
            $team = ($ib_gain->team_amount * 100) / 5000;
            $gained_percentage2 = ($self + $direct + $team);
        } elseif ($ib_gain->self_amount >= 100 && $ib_gain->direct_amount >= 1000 && $ib_gain->team_amount < 5000) {
            $self = 40;
            $direct = 30;
            $team = ($ib_gain->team_amount * 100) / 5000;
            $gained_percentage2 = ($self + $direct + $team);
        } else {
            $self = ($ib_gain->self_amount * 100) / 100;
            $direct = ($ib_gain->direct_amount * 100) / 1000;
            $team = ($ib_gain->team_amount * 100) / 5000;
            $gained_percentage2 = ($self + $direct + $team);
        }

        $gained_percentage3 = 0;
        if ($ib_gain->self_amount >= 500 && $ib_gain->direct_amount >= 5000 && $ib_gain->team_amount >= 10000) {
            $gained_percentage3 = 100;
        } elseif ($ib_gain->self_amount >= 500 && $ib_gain->direct_amount < 5000 && $ib_gain->team_amount < 10000) {
            $self = 40;
            $direct = ($ib_gain->direct_amount * 100) / 5000;
            $team = ($ib_gain->team_amount * 100) / 10000;
            $gained_percentage3 = ($self + $direct + $team);
        } elseif ($ib_gain->self_amount >= 500 && $ib_gain->direct_amount >= 5000 && $ib_gain->team_amount < 10000) {
            $self = 40;
            $direct = 30;
            $team = ($ib_gain->team_amount * 100) / 10000;
            $gained_percentage3 = ($self + $direct + $team);
        } else {
            $self = ($ib_gain->self_amount * 100) / 500;
            $direct = ($ib_gain->direct_amount * 100) / 5000;
            $team = ($ib_gain->team_amount * 100) / 10000;
            $gained_percentage3 = ($self + $direct + $team);
        }

        $gained_percentage4 = 0;
        if ($ib_gain->self_amount >= 1000 && $ib_gain->direct_amount >= 10000 && $ib_gain->team_amount >= 50000) {
            $gained_percentage4 = 100;
        } elseif ($ib_gain->self_amount >= 1000 && $ib_gain->direct_amount < 10000 && $ib_gain->team_amount < 50000) {
            $self = 40;
            $direct = ($ib_gain->direct_amount * 100) / 1000;
            $team = ($ib_gain->team_amount * 100) / 50000;
            $gained_percentage4 = ($self + $direct + $team);
        } elseif ($ib_gain->self_amount >= 1000 && $ib_gain->direct_amount >= 10000 && $ib_gain->team_amount < 50000) {
            $self = 40;
            $direct = 30;
            $team = ($ib_gain->team_amount * 100) / 50000;
            $gained_percentage4 = ($self + $direct + $team);
        } else {
            $self = ($ib_gain->self_amount * 100) / 1000;
            $direct = ($ib_gain->direct_amount * 100) / 10000;
            $team = ($ib_gain->team_amount * 100) / 50000;
            $gained_percentage4 = ($self + $direct + $team);
        }

        return view('back-end.public.become-an-ib.become-an-ib', compact('ib_gain', 'rank', 'gained_percentage1', 'gained_percentage2', 'gained_percentage3', 'gained_percentage4'));
    }
}
