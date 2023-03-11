<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\fileExists;

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
                'sl' => rand(11111, 99999),
                'image_path' => $file_name,
            ]);
            return redirect()->route('manage_banner')->with('message', 'Banner uploaded successfully!');
        } else {
            return view('back-end.banner.add-banner');
        }
    }

    public function editBanner(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'image' => 'required'
            ]);

            $banner_image = Banner::find($id);
            $imageHandler = new ImageHandlerController();

            $imageHandler->secureUnlink($banner_image->image_path);

            $file_name = $imageHandler->base64Upload($request->en_image, 'banner');

            $banner_image->image_path = $file_name;
            $banner_image->save();

            return redirect()->route('manage_banner')->with('message', 'Banner update successfully!');
        } else {
            $banner_image = Banner::find($id);
            return view('back-end.banner.edit-banner', compact('banner_image'));
        }
    }

    public function manageBanner()
    {
        $banners = Banner::orderBy('sl', 'asc')->get();
        return view('back-end.banner.manage-banner', compact('banners'));
    }

    public function deleteBanner($id)
    {
        $banner = Banner::find($id);

        $imageHandler = new ImageHandlerController();
        $imageHandler->secureUnlink($banner->image_path);

        $banner->delete();

        return redirect()->back()->with('message', 'Banner Deleted Successfully.');
    }
}
