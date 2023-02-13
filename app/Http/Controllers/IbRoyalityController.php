<?php

namespace App\Http\Controllers;

use App\Models\IbRoyality;
use Illuminate\Http\Request;

class IbRoyalityController extends Controller
{
    
    public function index()
    {
        //check products list
        $royality = IbRoyality::all();
        return view('back-end.ib-royality.manage-ib-royality', compact(
            'royality',
        ));
    }
    
    
    public function addRoyality(Request $request)
    {
                      
        // check method
         if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'rank' => 'required',
                'percentage' => 'required',

            ]);

            //create
            IbRoyality::create([
                'rank' => $request->rank,
                'percentage' => $request->percentage,
                'status' => $request->status,                       
            ]);

            return redirect()->route('manage_ib_royality')->with('message', 'Royality Add Successfully.');

        } else {
            return view('back-end.ib-royality.add-ib-royality');
        } 
    }

    

    public function updateRoyality(Request $request, $id)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'rank' => 'required',
                'percentage' => 'required',

            ]);

            //update
            $royality = IbRoyality::find($id);
            $royality->update([
                'rank' => $request->rank,
                'percentage' => $request->percentage,
                'status' => $request->status, 
            ]);

            return redirect()->route('manage_ib_royality')->with('message', 'Royality Update Successfully.');
        } else {
            $royality = IbRoyality::find($id);
            return view('back-end.ib-royality.update-ib-royality', compact('royality'));
        }
    }

    public function destroy($id)
    {
        IbRoyality::find($id)->delete();
        return redirect()->back()->with('message', 'Royality Deleted Successfully.');
    }

}
