<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreInquiryRequest;
use App\Mail\ContactMail;
use App\Mail\InquiryMail;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brochure;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Notice;
use App\Models\OtherSetting;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Popup;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::latest()->limit(4)->get();


        $products = Product::where('service_id', 5)->where('status', 'Active')->latest()->get();
        $videos = Video::latest()->limit(4)->get();
        $about = Page::where('id', 3)->first();
        $faqs = Faq::latest()->limit(4)->get();
        $teams = Team::latest()->get();
        $tesimonials = Testimonial::first();
        $blogs = Blog::latest()->limit(3)->get();
        $banners = Banner::orderBy("order", "asc")->get();
        $popup = Popup::get();
        $mission = Page::where('id', 4)->first();
        $vision = Page::where('id', 5)->first();
        $corevalue = Page::where('id', 6)->first();
        return view("frontend.home.index", compact("services", "products", "videos", "banners", "tesimonials", "teams", "blogs", 'about', 'faqs', 'popup', 'mission', 'vision', 'corevalue'));
    }

    public function submitInquery(StoreInquiryRequest $request, Product $submitInquery)
    {
        $email = OtherSetting::first()->email;

        $req = $request->all();
        // dd("aa", $submitInquery, $req);
        $req["product_name"] = $submitInquery->title;
        $req["product_id"] = $submitInquery->id;
        $mailData = Inquiry::create($req);

        Mail::to($email)->send(new InquiryMail($mailData));

        return redirect()->back()->with("popsuccess", "Inquiry Submitted.");
    }


    public function subservices(Service $service) // Correct binding
    {
        if (!$service) {
            return redirect()->back()->with('error', 'Category not found.');
        }
        return view("frontend.serviceproduct.index", compact('service'));

    }

    public function contact()
    {
        $suppilers = Partner::orderBy("order", 'asc')->get();
        return view("frontend.contact.index", compact('suppilers'));
    }

    public function brochure()
    {

        $brochure = Brochure::orderBy('order', 'asc')->get();
        return view('frontend.brochure.index', compact('brochure'));
    }

    public function notice()
    {

        $notices = Notice::get();
        return view('frontend.notice.index', compact('notices'));
    }

    public function certificates()
    {

        $notices = Certificate::get();
        return view('frontend.certificate.index', compact('notices'));
    }


    public function faqs()
    {

        $faqs = Faq::get();
        return view("frontend.faqs.index", compact('faqs'));
    }

    public function updatecontact(ContactRequest $request)
    {
        $email = OtherSetting::first()->email;

        $req = $request->all();
        $mailData = Contact::create($req);
        Mail::to($email)->send(new ContactMail($mailData));

        return redirect()->back()->with("popsuccess", "Message Sent");
    }

    public function termsandcondition()
    {
        $data = Page::where('id', 1)->first();
        return view('frontend.home.termandpolicy', compact('data'));
    }

    public function privacyPolicy()
    {

        $data = Page::where('id', 2)->first();
        return view('frontend.home.termandpolicy', compact('data'));
    }
}
