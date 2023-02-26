<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\user\FundController;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('back-end.dashboard');
    }

    public function manageUsers()
    {
        $users = User::where('user_type', 'public')->orderBy('id', 'desc')->paginate(10);
        return view('back-end.users.manage-users', compact('users'));
    }

    public function inspectUser($user_id)
    {
        abort(404);
    }

    public function verifyUser($user_id, $status)
    {
        if ($status == 1) {
            $user = User::find($user_id);
            if ($user->is_verified) {
                return back()->with('error', 'Already verified.');
            } else {
                $fundController = new FundController();
                $fundController->joiningBonus($user_id);
                $user->is_verified = 1;
                $user->save();

                return back()->with('message', 'Successfully updated.');
            }
        } else {
            return back()->with('warning', 'Something went wrong.');
        }
    }
}
