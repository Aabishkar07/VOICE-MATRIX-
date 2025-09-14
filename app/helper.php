<?php

use App\Models\Blog;
use App\Models\MetaPage;
use App\Models\Offer;
use App\Models\OtherSetting;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;

function getSetting()
{
    return OtherSetting::first();
}

function getServices()
{
    return Service::get();
}
function getParentServices()
{
    return Service::where('parent_id', 0)->get();
}
function getSubServices($parent_id)
{
    return Service::where('parent_id', $parent_id)->get();
}
function getproducts()
{
    return Product::get();
}




function getServicesWithProducts($parent_id)
{
    // Get main services with parent_id = 0
    $services = Service::where('parent_id', $parent_id)
  ->get();

    foreach ($services as $service) {
        // Get direct subcategories where parent_id matches current service id
        $service->subcategories = Service::where('parent_id', $service->id)

            ->get();

        // Get products for subcategories
        foreach ($service->subcategories as $subcategory) {
            $subcategory->products = Product::where('service_id', $subcategory->id)

                ->get();
        }
    }

    return $services;
}

function getCategories($parent_id)
{
    return Service::where('parent_id', $parent_id)->get();
}


function getMetas($segment1, $segment2)
{

    if (!Request::segment(1)) {
        $links = MetaPage::where("page_name", "home")->first();

        if ($links) {
            $meta = (object) [
                'title' => ucfirst($links->meta_title),
                'description' => $links->meta_description,
                'image' => 'images/voicematriclogo.svg',
                'keywords' => $links->keywords,
            ];
            return $meta;
        } else {
            $meta = (object) [
                'title' => 'Expert Data Entry, Processing & Outsourcing Solutions',
                'description' => 'Voice Matrix BPO Services offers professional data entry, processing, conversion, web research, digital marketing, and outsourcing solutions. With 99.5% accuracy, advanced tools, and a skilled team, we deliver cost-effective, client-friendly, and reliable BPO services tailored to your business needs.',
                'image' => 'images/voicematriclogo.svg',
                'keywords' => 'Voice Matrix BPO, BPO services, data entry outsourcing, data processing, data conversion, web research, digital marketing, indexing services, IT-enabled solutions, voice outsourcing, non-voice outsourcing, customer helpdesk, cost-effective BPO, accurate data entry',
            ];
            return $meta;
        }
    }
    $links = MetaPage::where("page_name", "!=", "home")->where('page_name', $segment1)->first();
    if ($links) {
        $meta = (object) [
            'title' => ucfirst($links->meta_title),
            'description' => $links->meta_description,
            'image' => 'uploads/' . $links->ogimage,
            'keywords' => $links->keywords,
        ];
        return $meta;
    } else if (Request::segment(1) == 'offer') {
        $offer = Offer::where('slug', $segment2)->first();
        $meta = (object) [
            'title' => $offer->meta_title,
            'description' => $offer->meta_description,
            'image' => 'uploads/' . $offer->image,
            'keywords' => $offer->meta_keywords,
        ];
        return $meta;
    } else if (Request::segment(1) == 'location') {
        $partner = Partner::where('slug', $segment2)->first();
        $meta = (object) [
            'title' => $partner->meta_title,
            'description' => $partner->meta_description,
            'image' => 'uploads/' . $partner->image,
            'keywords' => $partner->meta_keywords,
        ];
        return $meta;
    } else if (Request::segment(1) == 'blogs') {
        $blog = Blog::where('slug', $segment2)->first();
        $meta = (object) [
            'title' => $blog->meta_title,
            'description' => $blog->meta_description,
            'image' => 'uploads/' . $blog->featured_image,
            'keywords' => $blog->meta_keywords,
        ];
        return $meta;
    } else if (Request::segment(1) == 'service') {
        $service = Service::where('slug', $segment2)->first();

        $meta = (object) [
            'title' => $service->meta_title,
            'description' => $service->meta_description,
            'image' => 'uploads/' . $service->image,
            'keywords' => $service->meta_keywords,
        ];
        return $meta;
    } else {
        $links = MetaPage::where("page_name", "home")->first();
        if ($links) {
            $meta = (object) [
                'title' => ucfirst($links->meta_title),
                'description' => $links->meta_description,
                'image' => 'uploads/' . $links->ogimage,
                'keywords' => $links->keywords,
            ];
            return $meta;
        } else {
            $meta = (object) [
                'title' => 'Expert Data Entry, Processing & Outsourcing Solutions',
                'description' => 'Voice Matrix BPO Services offers professional data entry, processing, conversion, web research, digital marketing, and outsourcing solutions. With 99.5% accuracy, advanced tools, and a skilled team, we deliver cost-effective, client-friendly, and reliable BPO services tailored to your business needs.',
                'image' => 'images/voicematriclogo.svg',
                'keywords' => 'Voice Matrix BPO, BPO services, data entry outsourcing, data processing, data conversion, web research, digital marketing, indexing services, IT-enabled solutions, voice outsourcing, non-voice outsourcing, customer helpdesk, cost-effective BPO, accurate data entry',
            ];

            return $meta;
        }

    }

}
