<?php

namespace App\Http\Controllers;

use App\Models\IbRoyality;
use App\Models\RankAndReward;
use Illuminate\Http\Request;

class IbRoyalityController extends Controller
{
    public function index()
    {
        $royality = IbRoyality::all();
        return view('back-end.ib-royality.manage-ib-royality', compact('royality'));
    }

    public function addRoyality(Request $request)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'rank' => 'required|unique:ib_royalities,rank_id',
                'percentage' => 'required'
            ]);

            //create
            IbRoyality::create([
                'rank_id' => $request->rank,
                'percentage' => $request->percentage,
                'status' => $request->status,
            ]);

            return redirect()->route('manage_ib_royality')->with('message', 'Royalty Added Successfully.');
        } else {
            $ranks = RankAndReward::all();
            return view('back-end.ib-royality.add-ib-royality', compact('ranks'));
        }
    }

    public function updateRoyality(Request $request, $id)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'rank' => 'required|unique:ib_royalities,rank_id,' . $id,
                'percentage' => 'required'
            ]);

            //update
            $royality = IbRoyality::find($id);
            $royality->update([
                'rank_id' => $request->rank,
                'percentage' => $request->percentage,
                'status' => $request->status,
            ]);

            return redirect()->route('manage_ib_royality')->with('message', 'Royalty Update Successfully.');
        } else {
            $royality = IbRoyality::find($id);
            $ranks = RankAndReward::all();
            return view('back-end.ib-royality.update-ib-royality', compact('royality', 'ranks'));
        }
    }

    public function destroy($id)
    {
        IbRoyality::find($id)->delete();
        return redirect()->back()->with('message', 'Royalty Deleted Successfully.');
    }
}
