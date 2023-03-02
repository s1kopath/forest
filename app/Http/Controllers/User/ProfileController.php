<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        // upload base64 image to storage
        $image = $request->image;
        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $folderPath = "avatars/";
        $uniqid = uniqid();
        $file = $folderPath . $uniqid . '.' . $image_type;
        Storage::disk('public')->put($file, $image_base64);

        UserDetail::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'image' => $file,
        ]);

        return true;
    }
}
