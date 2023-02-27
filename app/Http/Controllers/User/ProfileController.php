<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updatePassword(Request $request)
    {
        $passUpdate = User::find(auth()->id());

        // function for check the old password
        if (!Hash::check($request->input('old_password'), $passUpdate->password)) {
            return redirect()->back()->with('error', 'Please, enter the correct password');
        }

        // check validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed|different:old_password|',
        ]);

        $passUpdate->update([
            'password' => bcrypt($request->new_password)
        ]);

        return redirect()->back()->with('message', 'Password Update successfully.');
    }
}
