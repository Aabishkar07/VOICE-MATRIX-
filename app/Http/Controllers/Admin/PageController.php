<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PageController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {}
    public function index()
    {
        $pages = Page::latest()->get();
        return view("admin.pages.index", compact("pages"));
    }

    public function create()
    {
        return view("admin.pages.add");
    }

    public function store(PageRequest $request)
    {
        $req = $request->all();
        if ($request->hasFile('top_image')) {

            $top_image = $this->imageservice->fileUpload($req["top_image"], "top_image");
            $req["top_image"] = $top_image;
        }
        if ($request->hasFile('mid_image')) {
            $mid_image = $this->imageservice->fileUpload($req["mid_image"], "mid_image");
            $req["mid_image"] = $mid_image;
        }
        // $req["category_id"] = $request->category;
        $req['slug'] = Str::slug($request->title);

        $page = Page::create($req);
        return redirect()->route("admin.pages.index")->with("popsuccess", "Page Added");
    }

    public function edit(Page $page)
    {
        return view("admin.pages.edit", compact("page"));
    }



    public function update(PageRequest $request, Page $page)
    {
        $req = $request->all();

        if ($request->hasFile('mid_image')) {
            if ($page->mid_image) {
                $this->imageservice->imageDelete($page->mid_image);
            }
            $page_image = $this->imageservice->fileUpload($req["mid_image"], "mid_image");
            $req['mid_image'] = $page_image;
        }
        if ($request->hasFile('top_image')) {
            if ($page->top_image) {
                $this->imageservice->imageDelete($page->top_image);
            }
            $top_image = $this->imageservice->fileUpload($req["top_image"], "top_image");
            $req['top_image'] = $top_image;
        }
        $page->update($req);
        return redirect()->route("admin.pages.index")->with("popsuccess", "Page Edited");
    }
}
