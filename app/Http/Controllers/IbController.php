<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IbController extends Controller
{
    public function index()
    {
        $ib = [];
        return view('back-end.ib.manage-ib', compact('ib'));
    }
}
