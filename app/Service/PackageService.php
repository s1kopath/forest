<?php

namespace App\Service;

use App\Models\Package;

class PackageService
{

    public static function create($request)
    {
        return Package::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'duration' => $request->duration,
            'percentage' => $request->percentage,
        ]);
    }
}
