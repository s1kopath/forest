<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Banner;
use App\Models\Wallet;
use App\Models\UserStake;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Models\AmountForIbGain;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\User\StakeController;

class PublicDashboardController extends Controller
{
    public function publicDashboard()
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $totalStake = UserStake::where('user_id', auth()->id())->sum('amount');
        $banners = Banner::where('status', 1)->orderBy('sl', 'asc')->get();

        return view('back-end.dashboard-public', compact('wallet', 'totalStake', 'banners'));
    }

    public function publicProfile()
    {
        $user = User::with('userToUserDetails')->where('id', auth()->id())->first();
        $userDetail = UserDetail::where('user_id', auth()->id())->first();

        return view('back-end.public.profile.profile', compact('user', 'userDetail'));
    }

    public function updatePublicProfile(Request $request)
    {
        $user = User::where('id', auth()->id())->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'username' => 'required|unique:users,username,' . $user->id,
            'phone_number' => 'nullable',
            'identity_number' => 'nullable',
            'date_of_birth' => 'nullable',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email
        ]);

        UserDetail::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'phone_number' => $request->phone_number,
            'identity_number' => $request->identity_number,
            'date_of_birth' => $request->date_of_birth
        ]);

        return back()->with('message', 'updated successfully.');
    }

    public function editLocation(Request $request)
    {
        $request->validate([
            'house_no' => 'nullable',
            'street' => 'nullable',
            'city' => 'nullable',
            'country' => 'nullable',
            'zip_code' => 'nullable'
        ]);

        UserDetail::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'house_no' => $request->house_no,
            'street' => $request->street,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
        ]);

        return back()->with('message', 'updated successfully.');
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

    public function referrals(Request $request)
    {
        $staked_user = UserStake::whereIn('user_id', auth()->user()->total_team)->distinct()->count('user_id');


        $list = User::with(['userToRank', 'userToRank.rankToRankReward'])->whereIn('id', auth()->user()->total_team);

        if ($request->rank) {
            if ($request->rank == 'null') {
                $list->whereRelation('userToRank', 'rank_id', null);
            } else {
                $list->whereRelation('userToRank', 'rank_id', $request->rank);
            }
        }

        $user_list = $list->paginate(5);

        return view('back-end.public.referrals.referrals', compact('staked_user', 'user_list'));
    }

    public function percentCalculation($rank, $ib_gain)
    {
        if ($rank == 1) {
            $self = $this->perCent($ib_gain->self_amount, 50, 40);
            $direct = $this->perCent($ib_gain->direct_amount, 300, 30);
            $team = $this->perCent($ib_gain->team_amount, 1000, 30);
            return $self + $direct + $team;
        } elseif ($rank == 2) {
            $self = $this->perCent($ib_gain->self_amount, 100, 40);
            $direct = $this->perCent($ib_gain->direct_amount, 1000, 30);
            $team = $this->perCent($ib_gain->team_amount, 5000, 30);
            return $self + $direct + $team;
        } elseif ($rank == 3) {
            $self = $this->perCent($ib_gain->self_amount, 500, 40);
            $direct = $this->perCent($ib_gain->direct_amount, 5000, 30);
            $team = $this->perCent($ib_gain->team_amount, 10000, 30);
            return $self + $direct + $team;
        } elseif ($rank == 4) {
            $self = $this->perCent($ib_gain->self_amount, 1000, 40);
            $direct = $this->perCent($ib_gain->direct_amount, 10000, 30);
            $team = $this->perCent($ib_gain->team_amount, 50000, 30);
            return $self + $direct + $team;
        } else {
            return 0;
        }
    }

    public function perCent($val, $target, $per)
    {
        if ($val >= $target) {
            return $per;
        } else {
            return ((($val * 100) / $target) * $per) / 100;
        }
    }

    public function becomeAnIb()
    {
        $ranksController = new RanksController();
        $ranksController->rank_calculation(auth()->id());

        $ib_gain = AmountForIbGain::where('user_id', auth()->id())->first();
        $rank = auth()->user()->userToRank->rank_id;

        $percentage['ib'] = $this->percentCalculation(1, $ib_gain);
        $percentage['pro-ib'] = $this->percentCalculation(2, $ib_gain);
        $percentage['master-ib'] = $this->percentCalculation(3, $ib_gain);
        $percentage['corporate-ib'] = $this->percentCalculation(4, $ib_gain);

        return view('back-end.public.become-an-ib.become-an-ib', compact('ib_gain', 'rank', 'percentage'));
    }
}
