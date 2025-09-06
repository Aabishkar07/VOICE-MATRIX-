<?php

use App\Models\OtherSetting;
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


//     function getServicesWithProducts() {
//         // $services = Service::get();
// $parent_id=0;

// $services=Service::where('parent_id', $parent_id)->get();

//         foreach ($services as $service) {
//             $service->products = Product::where('service_id', $service->id)->latest()->get();
//         }

//         return $services;
//     }



function getServicesWithProducts($parent_id) {
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

// function getServicesWithProducts($parent_id)
// {
//     // Fetch all services with the given parent ID
//     $services = Service::where('parent_id', $parent_id)->get();

//     foreach ($services as $service) {
//         // Get subcategories (children of the current service)
//         $service->subcategories = Service::where('parent_id', $service->id)->get();

//         // Get all products associated with the current service
//         $service->products = Product::where('service_id', $service->id)->get();

//         // For each subcategory, fetch its associated products
//         foreach ($service->subcategories as $subcategory) {
//             $subcategory->products = Product::where('service_id', $subcategory->id)->get();
//         }
//     }

//     return $services;
// }









    function getCategories($parent_id)
{
    return Service::where('parent_id', $parent_id)->get();
}
