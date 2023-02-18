<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicDashboardController extends Controller
{
    public function publicDashboard()
    {
        return view('back-end.dashboard-public');
    }

    public function publicProfile()
    {
        return view('back-end.public-profile.profile');
    }
}
