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

    public function publicProfile(Request $request)
    {
        $user=User::where('id', auth()->id())->first();
        $userDetail = UserDetail::where('id', auth()->id())->first();
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'identity_number' => 'required',
                'date_of_birth' => 'nullable',
            ]);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                ]);
            $userDetail->update([
                'phone_number' => $request->phone_number,
                'identity_number' => $request->identity_number,
                'date_of_birth' => $request->date_of_birth,
            ]);

            return redirect()->route('public_profile');
        }
        else{
            $user = auth()->user();

            return view('back-end.public.profile.profile', compact('user', 'userDetail'));
        }
    }

    public function editLocation(Request $request){

        $userDetail = UserDetail::where('id', auth()->id())->first();
        if ($request->isMethod('POST')) {
            $request->validate([
                'house_no' => 'nullable',
                'street' => 'nullable',
                'city' => 'nullable',
                'country' => 'nullable',
                'zip_code'=> 'nullable'
            ]);

            $userDetail->update([
                'house_no' => $request->house_no,
                'street' => $request->street,
                'city' => $request->city,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
            ]);
            return redirect()->route('public_profile');
        }
        else{
            return view('back-end.public.profile.profile', compact('userDetail'));
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

        return view('back-end.public.become-an-ib.become-an-ib', compact('ib_gain', 'rank'));
    }
}
