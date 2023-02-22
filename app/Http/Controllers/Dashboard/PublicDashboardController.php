<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\user\StakeController;
use App\Models\UserStake;
use App\Models\Wallet;
use Illuminate\Http\Request;

class PublicDashboardController extends Controller
{
    public function publicDashboard()
    {
        $wallet = Wallet::where('user_id', auth()->id())->first();

        return view('back-end.dashboard-public', compact('wallet'));
    }

    public function publicProfile()
    {
        return view('back-end.public.profile.profile');
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
        return view('back-end.public.referrals.referrals');
    }

    public function becomeAnIb()
    {
        return view('back-end.public.become-an-ib.become-an-ib');
    }
}
