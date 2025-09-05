<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view("admin.Gallery.index", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Gallery.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $req = $request->all();
        $gallery_image = $this->imageservice->fileUpload($req["image"], "gallery");
        $req["image"] = $gallery_image;

        $gallery = Gallery::create($req);
        return redirect()->route("admin.gallery.index")->with("popsuccess", "Image Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view("admin.Gallery.edit", compact("gallery"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {

        $req = $request->all();

        if ($request->hasFile('image')) {
          
            if ($gallery->image) {
                $this->imageservice->imageDelete($gallery->image);
            }
            $gallery_image = $this->imageservice->fileUpload($req["image"], "gallery");
            $req['image'] = $gallery_image;
        }
        $gallery->update($req);
        return redirect()->route("admin.gallery.index")->with("popsuccess", "Gallery Image Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            $this->imageservice->imageDelete($gallery->image);
        }
        $gallery->delete();
        return redirect()->route("admin.gallery.index")->with("popsuccess", "Gallery Image Deleted");
    }
}
