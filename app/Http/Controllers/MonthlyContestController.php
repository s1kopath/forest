<?php

namespace App\Http\Controllers;

use App\Models\MonthlyContest;
use Illuminate\Http\Request;

class MonthlyContestController extends Controller
{

    public function index()
    {
        $month = MonthlyContest::all();
        return view('back-end.monthly-contest.manage-monthly-contest', compact(
            'month',
        ));
    }

    public function addContest(Request $request)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'name' => 'required',
                'direct_amount' => 'required',
                'reward_amount' => 'required',
            ]);

            //create
            MonthlyContest::create([
                'name' => $request->name,
                'direct_amount' => $request->direct_amount,
                'reward_amount' => $request->reward_amount,

            ]);

            return redirect()->route('manage_monthly_contest')->with('message', 'Contest Add Successfully.');
        } else {
            return view('back-end.monthly-contest.add-monthly-contest');
        }
    }

    public function updateContest(Request $request, $id)
    {
        // check method
        if ($request->isMethod('POST')) {
            // validation
            $request->validate([
                'name' => 'required',
                'direct_amount' => 'required',
                'reward_amount' => 'required',

            ]);

            //update
            $month = MonthlyContest::find($id);
            $month->update([
                'name' => $request->name,
                'direct_amount' => $request->direct_amount,
                'reward_amount' => $request->reward_amount,
            ]);

            return redirect()->route('manage_monthly_contest')->with('message', 'Contest Update Successfully.');
        } else {
            $month = MonthlyContest::find($id);
            return view('back-end.monthly-contest.update-monthly-contest', compact('month'));
        }
    }

    public function destroy($id)
    {
        MonthlyContest::find($id)->delete();
        return redirect()->back()->with('message', 'Contest Deleted Successfully.');
    }
}
