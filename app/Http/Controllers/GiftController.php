<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index()
    {
        $gift = Gift::all();
        return view('back-end.gift.manage-gift', compact('gift'));
    }

    public function addGift(Request $request)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'type' => 'required',
                'percentage' => 'required'
            ]);

            //create
            Gift::create([
                'type' => $request->type,
                'percentage' => $request->percentage,
                'status' => $request->status,
            ]);

            return redirect()->route('manage_gift')->with('message', 'Gift Added Successfully.');
        } else {
            if (Gift::count() > 0) {
                return redirect()->route('manage_gift')->with('message', 'Already Added.');
            } else {
                return view('back-end.gift.add-gift');
            }
        }
    }

    public function updateGift(Request $request, $id)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'type' => 'required',
                'percentage' => 'required',

            ]);

            //update
            $gift = Gift::find($id);
            $gift->update([
                'type' => $request->type,
                'percentage' => $request->percentage,
                'status' => $request->status,
            ]);

            return redirect()->route('manage_gift')->with('message', 'Gift Update Successfully.');
        } else {
            $gift = Gift::find($id);
            return view('back-end.gift.update-gift', compact('gift'));
        }
    }

    public function destroy($id)
    {
        Gift::find($id)->delete();
        return redirect()->back()->with('message', 'Gift Deleted Successfully.');
    }
}
