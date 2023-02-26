<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UserDetail;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\StakeController;
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
        $user = auth()->user();
        return view('back-end.public.profile.profile', compact('user'));
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
        $user = User::with('children')->find(auth()->user())->first();
        return view('back-end.public.referrals.referrals', compact('user'));
    }

    public function becomeAnIb()
    {
        return view('back-end.public.become-an-ib.become-an-ib');
    }
}
