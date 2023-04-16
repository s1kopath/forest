<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IbController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->whereIn('id', function ($qry) use ($keyword) {
                $qry->select('id')
                    ->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('username', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%');
            });
        }

        $ibs = $query->whereHas('userToRank.rankToRankReward')
            ->with(['userToRank', 'userToRank.rankToRankReward', 'userToAmountForIbGain'])
            ->where('user_type', 'public')
            ->latest()
            ->paginate(10);


        return view('back-end.ib.manage-ib', compact('ibs'));
    }
}
