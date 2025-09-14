<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\Affiliation;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brochure;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Inquiry;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\HomeSection;
use App\Models\Industry;
use App\Models\MetaPage;
use App\Models\Notice;
use App\Models\Offer;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
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
        // Primary counts used previously
        $servicecount = Service::count();
        $blogcount = Blog::count();
        $contactcount = Contact::count();
        $suppilercount = Partner::count();

        // Additional counts for dashboard cards
        $industrycount = Industry::count();
        $offercount = Offer::count();
        $affiliationcount = Affiliation::count();
        $pagecount = Page::count();
        $metapagecount = MetaPage::count();
        $homesectioncount = HomeSection::count();
        $bannercount = Banner::count();
        $teamcount = Team::count();
        $faqcount = Faq::count();


        return view(
            "admin.dashboard.index",
            compact(
                "servicecount",
                "blogcount",
                "suppilercount",
                "contactcount",
                "industrycount",
                "offercount",
                "affiliationcount",
                "pagecount",
                "metapagecount",
                "homesectioncount",
                "bannercount",
                "teamcount",
                "faqcount"
            )
        );
    }
}
