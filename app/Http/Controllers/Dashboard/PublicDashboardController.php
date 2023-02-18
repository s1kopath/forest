<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        return view('back-end.public-profile.profile');
    }
}
