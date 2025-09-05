<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(
        protected ImageService $imageservice
    ) {}
    public function index()
    {
        //
        $testimonial = Testimonial::latest()->get();
        return view('admin.testimonial.index', compact("testimonial"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.testimonial.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {

        $req = $request->all();
        $blog_image = $this->imageservice->fileUpload($req["featured_image"], "blog");
        $req["featured_image"] = $blog_image;
        // $req["category_id"] = $request->category;
        $req['slug'] = Str::slug($request->title);

        $blog = Testimonial::create($req);
        return redirect()->route("admin.testimonial.index")->with("popsuccess", "Testimonial Added");
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
    public function edit(string $id)
    {
        //
        $blog=Testimonial::find($id);

        return view("admin.testimonial.edit", compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, string $id)
    {
        //
        $blog = Testimonial::find($id);
        $req = $request->all();
        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                $this->imageservice->imageDelete($blog->featured_image);
            }
            $blog_image = $this->imageservice->fileUpload($req["featured_image"], "blog");
            $req['featured_image'] = $blog_image;
        }
        $req['slug'] = Str::slug($request->title);
        // $req["category_id"] = $request->category;

        $blog->update($req);
        return redirect()->route("admin.testimonial.index")->with("popsuccess", "Testimonial Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog=Testimonial::find($id);
        if ($blog->featured_image) {
            $this->imageservice->imageDelete($blog->featured_image);
        }
        $blog->delete();
        return redirect()->route("admin.testimonial.index")->with("popsuccess", "Testimonial Deleted");
    }
}
