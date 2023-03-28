<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\UserDetail;
use App\Models\BankDetails;
use App\Models\VisaDetails;
use Illuminate\Http\Request;
use App\Models\CryptoDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CryptoDetailRequest;
use App\Http\Controllers\ImageHandlerController;
use App\Http\Requests\BankDetailRequest;
use App\Http\Requests\VisaDetailRequest;

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

    public function uploadKycPicture(Request $request)
    {
        $userDetails = UserDetail::where('user_id', auth()->id())->first();

        $imageHandler = new ImageHandlerController();
        $file_name_1 = $imageHandler->base64Upload($request->image_1, 'kyc');
        $file_name_2 = $imageHandler->base64Upload($request->image_2, 'kyc');

        if ($userDetails) {
            $imageHandler->secureUnlink($userDetails->kyc_image_1);
            $imageHandler->secureUnlink($userDetails->kyc_image_2);

            $userDetails->kyc_type = $request->identity_type;
            $userDetails->kyc_image_1 = $file_name_1;
            $userDetails->kyc_image_2 = $file_name_2;
            $userDetails->save();
        } else {
            UserDetail::create([
                'user_id' => auth()->id(),
                'kyc_type' => $request->identity_type,
                'kyc_image_1' => $file_name_1,
                'kyc_image_2' => $file_name_2,
            ]);
        }

        return true;
    }

    public function updateVisa(VisaDetailRequest $request)
    {
        $check = VisaDetails::where('user_id', auth()->id())->first();
        if ($check) {
            return back()->with('error', 'Visa already updated.');
        } else {
            $request->validated();

            $visa = new VisaDetails();
            $visa->user_id = auth()->id();
            $visa->card_holder_name = $request->card_holder_name;
            $visa->card_number = $request->card_number;
            $visa->save();
            return back()->with('message', 'Visa updated successfully.');
        }
    }

    public function updateBank(BankDetailRequest $request)
    {
        $check = BankDetails::where('user_id', auth()->id())->first();
        if ($check) {
            return back()->with('error', 'Bank already updated.');
        } else {
            $request->validated();

            $bank = new BankDetails();
            $bank->user_id = auth()->id();
            $bank->bank_name = $request->bank_name;
            $bank->branch_name = $request->branch_name;
            $bank->account_name = $request->account_name;
            $bank->account_number = $request->account_number;
            $bank->country = $request->country;
            $bank->state = $request->state;
            $bank->swift_code = $request->swift_code;
            $bank->routing_number = $request->routing_number;
            $bank->save();

            return back()->with('message', 'Bank updated successfully.');
        }
    }

    public function updateCrypto(CryptoDetailRequest $request)
    {
        $check = CryptoDetails::where('user_id', auth()->id())->first();
        if ($check) {
            return back()->with('error', 'Crypto already updated.');
        } else {
            $request->validated();

            $bank = new CryptoDetails();
            $bank->user_id = auth()->id();
            $bank->network = $request->network;
            $bank->wallet_address = $request->wallet_address;
            $bank->save();

            return back()->with('message', 'Crypto updated successfully.');
        }
    }
}
