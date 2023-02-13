<?php

namespace App\Http\Controllers;

use App\Models\Ib;
use Illuminate\Http\Request;

class IbController extends Controller
{
    
    public function index()
    {
        $ib = Ib::all();
        return view('back-end.ib.manage-ib', compact(
            'ib',
        ));
    }
    
    public function addIb(Request $request)
    {
         // check method
         if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'ib_name' => 'required',
                'self_amount' => 'required',
                'direct_amount' => 'required',
                'team_amount' => 'required',

            ]);

            //create
            Ib::create([
                'ib_name' => $request->ib_name,
                'self_amount' => $request->self_amount,
                'direct_amount' => $request->direct_amount,                       
                'team_amount' => $request->team_amount,                       
                'reward' => $request->reward,                       
            ]);

            return redirect()->route('manage_ib')->with('message', 'IB Add Successfully.');

        } else {
            return view('back-end.ib.add-ib');
        } 
        
    }


    public function updateIb(Request $request, $id)
    {
            // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'ib_name' => 'required',
                'self_amount' => 'required',
                'direct_amount' => 'required',
                'team_amount' => 'required',

            ]);

            //update
            $ib = Ib::find($id);
            $ib->update([
                'ib_name' => $request->ib_name,
                'self_amount' => $request->self_amount,
                'direct_amount' => $request->direct_amount,                       
                'team_amount' => $request->team_amount,                       
                'reward' => $request->reward,
            ]);

            return redirect()->route('manage_ib')->with('message', 'Gift Update Successfully.');
        } else {
            $ib = Ib::find($id);
            return view('back-end.ib.update-ib', compact('ib'));
        }
    }

    public function destroy($id)
    {
        Ib::find($id)->delete();
        return redirect()->back()->with('message', 'IB Deleted Successfully.');
    }
}
