<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $offers = Offer::latest()->get();
        return view("admin.offer.index", compact("offers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.offer.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfferRequest $request)
    {
        $req = $request->all();
        $service_image = $this->imageservice->fileUpload($req["image"], "offer");
        $req["image"] = $service_image;
        $req['slug'] = Str::slug($request->title);
        $service = Offer::create($req);


        return redirect()->route("admin.offers.index")->with("popsuccess", "Offer Added");
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
    public function edit(Offer $offer)
    {
        return view("admin.offer.edit", compact("offer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($offer->image) {
                $this->imageservice->imageDelete($offer->image);
            }
            $service_image = $this->imageservice->fileUpload($req["image"], "offer");
            $req['image'] = $service_image;
        }
        $req['slug'] = Str::slug($request->title);
        // dd($req);


        $offer->update($req);


        return redirect()->route("admin.offers.index")->with("popsuccess", "Offer Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Offer $offer)
    {
        if ($offer->image) {
            $this->imageservice->imageDelete($offer->image);
        }

        $offer->delete();

        return redirect()->route("admin.offers.index")->with("popsuccess", "Offer Deleted");
    }
}
