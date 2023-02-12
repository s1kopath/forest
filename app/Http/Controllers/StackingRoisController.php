<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StackingRoisController extends Controller
{
    public function addStacking()
    {
        return view('back-end.stacking-rois.add-stacking-rois');
    }
}
