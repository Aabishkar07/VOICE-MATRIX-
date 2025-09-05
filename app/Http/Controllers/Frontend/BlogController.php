<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blogsingle(Blog $blog)
    {
        $otherblogs = Blog::where("id", "!=", $blog->id)->get();
        return view('frontend.blogs.singlepage', compact("blog", "otherblogs"));
    }

    public function allblogs()
    {
        $blogs = Blog::latest()->limit(3)->get();

        return view('frontend.blogs.allblog', compact("blogs"));
    }
}
