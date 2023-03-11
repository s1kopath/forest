<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ImageHandlerController;

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

    public function uploadProfilePicture(Request $request)
    {
        $userDetails = UserDetail::where('user_id', auth()->id())->first();

        $imageHandler = new ImageHandlerController();
        $file_name = $imageHandler->base64Upload($request->image, 'avatars');

        if ($userDetails) {
            $imageHandler->secureUnlink($userDetails->image);

            $userDetails->image = $file_name;
            $userDetails->save();
        } else {
            UserDetail::create([
                'user_id' => auth()->id(),
                'image' => $file_name
            ]);
        }

        return true;
    }
}
