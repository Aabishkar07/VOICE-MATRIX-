<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
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
        $industries = Industry::all();
        return view("admin.industry.index", compact("industries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.industry.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "order" => "required|numeric",
            "image" => "required",
        ]);

        $req = $request->all();
        $industry_image = $this->imageservice->fileUpload($req["image"], "industry");
        $req["image"] = $industry_image;

        Industry::create($req);

        return redirect()->route("admin.industries.index")->with("popsuccess", "Industry created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Industry $industry)
    {
        return view("admin.industry.show", compact("industry"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industry $industry)
    {
        return view("admin.industry.edit", compact("industry"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industry $industry)
    {
        $request->validate([
            "title" => "required",
            "order" => "nullable|numeric",
            // "image"=> "required",
        ]);

        $req = $request->all();
        if ($request->hasFile("image")) {
            if ($industry->image) {
                $this->imageservice->imageDelete($industry->image);
            }
            $industry_image = $this->imageservice->fileUpload($req["image"], "industry");
            $req["image"] = $industry_image;
        }

        $industry->update($req);

        return redirect()->route("admin.industries.index")->with("popsuccess", "Industry updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industry $industry)
    {
        if ($industry->image) {
            $this->imageservice->imageDelete($industry->image);
        }
        $industry->delete();

        return redirect()->route("admin.industries.index")->with("popsuccess", "Industry deleted successfully");
    }
}
