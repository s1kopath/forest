<?php

namespace App\Http\Controllers;

use App\Models\StakingRoi;
use Illuminate\Http\Request;

class StackingRoisController extends Controller
{
    public function index()
    {
        $stacking = StakingRoi::all();
        return view('back-end.stacking-rois.manage-stacking-rois', compact('stacking'));
    }

    public function addStacking(Request $request)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'duration' => 'required|unique:staking_rois,duration',
                'percentage' => 'required'
            ]);

            //create
            StakingRoi::create([
                'duration' => $request->duration,
                'percentage' => $request->percentage,
                'status' => $request->status,
            ]);

            return redirect()->route('manage_stacking_rois')->with('message', 'Stacking Added Successfully.');
        } else {
            return view('back-end.stacking-rois.add-stacking-rois');
        }
    }

    public function updateStacking(Request $request, $id)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'duration' => 'required|unique:staking_rois,duration,' . $id,
                'percentage' => 'required'
            ]);

            $stacking = StakingRoi::find($id);

            $stacking->update([
                'duration' => $request->duration,
                'percentage' => $request->percentage,
                'status' => $request->status,
            ]);

            return redirect()->route('manage_stacking_rois')->with('message', 'Stacking Update Successfully.');
        } else {
            $stacking = StakingRoi::find($id);
            return view('back-end.stacking-rois.update-stacking-rois', compact('stacking'));
        }
    }

    public function destroy($id)
    {
        StakingRoi::find($id)->delete();
        return redirect()->back()->with('message', 'Stacking Deleted Successfully.');
    }
}
