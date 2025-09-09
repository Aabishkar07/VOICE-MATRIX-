<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHomeSectionRequest;
use App\Http\Requests\UpdateHomeSectionRequest;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeSectionController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSections = HomeSection::latest()->get();
        return view("admin.homesection.index", compact("homeSections"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.homesection.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeSectionRequest $request)
    {
        $req = $request->all();

        if ($request->hasFile('image')) {
            $section_image = $this->imageservice->fileUpload($req["image"], "homesection");
            $req["image"] = $section_image;
        }

        if ($request->hasFile('mini_image')) {
            $mini_image = $this->imageservice->fileUpload($req["mini_image"], "homesection");
            $req["mini_image"] = $mini_image;
        }


        $homeSection = HomeSection::create($req);

        return redirect()->route("admin.homesections.index")->with("popsuccess", "Home Section Added");
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
    public function edit(HomeSection $homesection)
    {
        return view("admin.homesection.edit", compact("homesection"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeSectionRequest $request, HomeSection $homesection)
    {
        $req = $request->all();

        if ($request->hasFile('image')) {
            if ($homesection->image) {
                $this->imageservice->imageDelete($homesection->image);
            }
            $section_image = $this->imageservice->fileUpload($req["image"], "homesection");
            $req['image'] = $section_image;
        }

        if ($request->hasFile('mini_image')) {
            if ($homesection->mini_image) {
                $this->imageservice->imageDelete($homesection->mini_image);
            }
            $mini_image = $this->imageservice->fileUpload($req["mini_image"], "homesection");
            $req['mini_image'] = $mini_image;
        }

        // $req['slug'] = Str::slug($request->title);
        $homesection->update($req);

        return redirect()->route("admin.homesections.index")->with("popsuccess", "Home Section Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, HomeSection $homesection)
    {
        if ($homesection->image) {
            $this->imageservice->imageDelete($homesection->image);
        }

        if ($homesection->mini_image) {
            $this->imageservice->imageDelete($homesection->mini_image);
        }

        $homesection->delete();

        return redirect()->route("admin.homesections.index")->with("popsuccess", "Home Section Deleted");
    }
}
