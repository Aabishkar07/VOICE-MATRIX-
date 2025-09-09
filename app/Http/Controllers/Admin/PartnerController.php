<?php

namespace App\Http\Controllers\Admin;
use App\FileService\ImageService;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\String_;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected ImageService $imageservice
    ) {
    }


    public function index()
    {
        //
        $partners = Partner::latest()->get();
        return view('admin.partner.index', compact("partners"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.partner.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerRequest $request)
    {


        $req = $request->all();

        $req['slug'] = Str::slug($request->title);

        $partner = Partner::create($req);
        return redirect()->route("admin.partners.index")->with("popsuccess", "Partners Added");
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
    public function edit(string $id)
    {

        $partner = Partner::find($id);

        return view("admin.partner.edit", compact("partner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, string $id)
    {

        $partner = Partner::find($id);
        $req = $request->all();

        $req['slug'] = Str::slug($request->title);
        // $req["category_id"] = $request->category;

        $partner->update($req);
        return redirect()->route("admin.partners.index")->with("popsuccess", "Partner Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::find($id);
        // if ($partner->featured_image) {
        //     $this->imageservice->imageDelete($partner->featured_image);
        // }
        $partner->delete();
        return redirect()->route("admin.partners.index")->with("popsuccess", "Partners Deleted");
    }
}
