<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get();
        return view('admin.products.add', compact("services"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $req = $request->all();
        $product_image = $this->imageservice->fileUpload($req["image"], "product");
        $req["image"] = $product_image;
        $req["service_id"] = $request->service;
        $req['slug'] = Str::slug($request->title);
        $req['status'] = 'Active';
        $product = Product::create($req);
        return redirect()->route("admin.products.index")->with("popsuccess", "Product Added");
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
    public function edit(Product $product)
    {
        $services = Service::get();

        return view("admin.products.edit", compact("services", "product"));
    }

    /**
     * Update the specified resource in storage.
     */


     public function updatestatus(Request $request, Product $updatestatus)
     {



     $updatestatus->status = $request->status;
     $updatestatus->save();

     return redirect()->back()->with('popsuccess', 'product updated successfully!');
     }


    public function update(UpdateProductRequest $request, Product $product)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($product->image) {
                $this->imageservice->imageDelete($product->image);
            }
            $product_image = $this->imageservice->fileUpload($req["image"], "product");
            $req['image'] = $product_image;
        }
        $req['slug'] = Str::slug($request->title);
        $req["service_id"] = $request->service;

        $product->update($req);
        return redirect()->route("admin.products.index")->with("popsuccess", "Product Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            $this->imageservice->imageDelete($product->image);
        }
        $product->delete();
        return redirect()->route("admin.products.index")->with("popsuccess", "Product Deleted");
    }
}
