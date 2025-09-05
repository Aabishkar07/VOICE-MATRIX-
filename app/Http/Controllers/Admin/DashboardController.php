<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Inquiry;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class DashboardController extends Controller
// implements HasMiddleware
{


    // public static function middleware(): array
    // {
    //     return [
    //         Admin::class,
    //     ];
    // }

    public function dashboard()
    {
        $servicecount=Service::count();
        $blogcount=Blog::count();
        $contactcount=Contact::count();
        $suppilercount=Partner::count();
        $reviewcount=Testimonial::count();
        $productcount=Product::count();
        $videocount=Video::count();
        $inquirycount=Inquiry::count();

        return view("admin.dashboard.index",compact("servicecount","inquirycount","blogcount","reviewcount","contactcount","suppilercount","productcount","videocount"));
    }
}
