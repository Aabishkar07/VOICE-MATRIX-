<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $req = $request->all();
        $blog_image = $this->imageservice->fileUpload($req["featured_image"], "blog");
        $req["featured_image"] = $blog_image;
        // $req["category_id"] = $request->category;
        $req['slug'] = Str::slug($request->title);

        $blog = Blog::create($req);
        return redirect()->route("admin.blogs.index")->with("popsuccess", "Blog Added");
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
    public function edit(Blog $blog)
    {
        return view("admin.blogs.edit", compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $req = $request->all();
        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                $this->imageservice->imageDelete(filePath: $blog->featured_image);
            }
            $blog_image = $this->imageservice->fileUpload($req["featured_image"], "blog");
            $req['featured_image'] = $blog_image;
        }
        $req['slug'] = Str::slug($request->title);
        // $req["category_id"] = $request->category;

        $blog->update($req);
        return redirect()->route("admin.blogs.index")->with("popsuccess", "Blog Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->featured_image) {
            $this->imageservice->imageDelete($blog->featured_image);
        }
        $blog->delete();
        return redirect()->route("admin.blogs.index")->with("popsuccess", "Blog Deleted");
    }
}
