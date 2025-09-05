<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BannerController extends Controller
{

    public function __construct(
        protected ImageService $imageservice
    ) {}

    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banner.index', compact("banners"));
    }

    public function create()
    {
        return view('admin.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $req = $request->all();
        $banner_image = $this->imageservice->fileUpload($req["image"], "banner");
        $req["image"] = $banner_image;
        // $req["category_id"] = $request->category;
        $req['slug'] = Str::slug($request->title);

        $banner = Banner::create($req);
        return redirect()->route("admin.banner.index")->with("popsuccess", "Banner Added");
    }

    public function edit(Banner $banner)
    {
        return view("admin.banner.edit", compact("banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($banner->image) {
                $this->imageservice->imageDelete($banner->image);
            }
            $banner_image = $this->imageservice->fileUpload($req["image"], "banner");
            $req['image'] = $banner_image;
        }
        $req['slug'] = Str::slug($request->title);
        // $req["category_id"] = $request->category;

        $banner->update($req);
        return redirect()->route("admin.banner.index")->with("popsuccess", "Banner Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            $this->imageservice->imageDelete($banner->image);
        }
        $banner->delete();
        return redirect()->route("admin.banner.index")->with("popsuccess", "Banner Deleted");
    }
}
