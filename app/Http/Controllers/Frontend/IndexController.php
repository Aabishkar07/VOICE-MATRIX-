<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreInquiryRequest;
use App\Mail\ContactMail;
use App\Mail\InquiryMail;
use App\Models\Affiliation;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brochure;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\HomeSection;
use App\Models\Industry;
use App\Models\Inquiry;
use App\Models\Notice;
use App\Models\Offer;
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
        $faqs = Faq::orderBy("order", "asc")->limit(4)->get();
        $offers = Offer::latest()->get();
        $affiliations = Affiliation::orderBy("order", "asc")->get();
        $partners = Partner::orderBy("order", "asc")->get();
        $industries = Industry::orderBy("order", "asc")->get();
        $tesimonials = Testimonial::first();
        $blogs = Blog::latest()->limit(4)->get();
        $banners = Banner::orderBy("order", "asc")->get();
        $popup = Popup::get();
        $about = HomeSection::where('id', 2)->first();
        $best = HomeSection::where('id', 1)->first();
        return view("frontend.home.index", compact("services", "affiliations", 'partners', "offers", "best", "about", "banners", "tesimonials", "blogs", 'about', 'faqs', 'popup', 'industries'));
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
            return redirect()->back()->with('error', 'service not found.');
        }
        $title = "Services";
        return view("frontend.serviceproduct.index", compact('service', 'title'));

    }
    public function offers(Offer $offer) // Correct binding
    {
        if (!$offer) {
            return redirect()->back()->with('error', 'offer not found.');
        }
        $title = "Offers";
        $service = $offer;

        return view("frontend.serviceproduct.index", compact('service', 'title'));

    }
    public function location(Partner $location) // Correct binding
    {

        $title = "Location";
        $service = $location;

        return view("frontend.serviceproduct.index", compact('service', 'title'));

    }

    public function contact()
    {
        $partners = Partner::orderBy("order", 'asc')->get();
        return view("frontend.contact.index", compact('partners'));
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
