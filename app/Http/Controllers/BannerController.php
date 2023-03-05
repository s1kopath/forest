<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function addBanner(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'image' => 'required'
            ]);

            $imageHandler = new ImageHandlerController();
            $file_name = $imageHandler->base64Upload($request->en_image, 'banner');

            Banner::create([
                'sl' => Banner::latest()->first('sl')->sl + 1,
                'image_path' => $file_name,
            ]);

            return redirect()->route('manage_banner')->with('message', 'Banner uploaded successfully!');
        } else {
            return view('back-end.banner.add-banner');
        }
    }

    public function editBanner(Request $request, $id)
    {
        abort(404);
        if ($request->isMethod('post')) {
            return $request->all();
        } else {
            return view('back-end.banner.edit-banner');
        }
    }

    public function manageBanner()
    {
        $banners = Banner::orderBy('sl', 'asc')->get();
        return view('back-end.banner.manage-banner', compact('banners'));
    }

    public function deleteBanner($id)
    {
        Banner::destroy($id);

        return back()->with('Deleted successfully!');
    }
}
