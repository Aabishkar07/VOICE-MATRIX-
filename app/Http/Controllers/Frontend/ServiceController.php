<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function servicesingle(Service $service)
    {
        $products = Product::where("service_id", $service->id)->where('status' ,'Active')->get();
        return view('frontend.services.serviceproduct', compact("products"));
    }
    public function productsingle(Product $product)
    {


        return view('frontend.services.singlepage', compact("product"));
    }

    public function services()
    {
        $services = Service::latest()->get();

        return view('frontend.services.allservice', compact("services"));
    }
    public function products()
    {
        $products = Product::latest()->get();

        return view('frontend.services.allproduct', compact("products"));
    }
}
