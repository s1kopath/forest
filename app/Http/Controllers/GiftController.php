<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    
    public function index()
    {
        $gift = Gift::all();
        return view('back-end.gift.manage-gift', compact(
            'gift',
        ));
    }
    
    public function addGift(Request $request)
    {
         // check method
         if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'type' => 'required',
                'percentage' => 'required',

            ]);

            //create
            Gift::create([
                'type' => $request->type,
                'percentage' => $request->percentage,
                'status' => $request->status,                       
            ]);

            return redirect()->back()->with('message', 'Gift Add Successfully.');

        } else {
            return view('back-end.gift.add-gift');
        } 
        
    }
}
