<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageHandlerController extends Controller
{
    public function base64Upload($image, $path_prefix = 'other')
    {
        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $folderPath = $path_prefix . "/";
        $uniqid = uniqid();
        $file = $folderPath . $uniqid . '.' . $image_type;
        Storage::disk('public')->put($file, $image_base64);

        return $file;
    }
}
