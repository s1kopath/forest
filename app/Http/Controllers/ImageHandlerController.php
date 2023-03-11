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

    public function secureUnlink($path)
    {
        $absolute_path = storage_path() . '/app/public/' . $path;

        if (file_exists($absolute_path) && is_file($absolute_path)) {
            unlink($absolute_path);
            return true;
        } else {
            return false;
        }
    }
}
