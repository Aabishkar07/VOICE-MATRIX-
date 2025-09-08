<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAffiliationRequest;
use App\Http\Requests\UpdateAffiliationRequest;
use App\Models\Affiliation;
use Illuminate\Http\Request;

class AffiliationController extends Controller
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
        $affiliations = Affiliation::orderBy('order', 'asc')->latest()->get();
        return view("admin.affiliation.index", compact("affiliations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.affiliation.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAffiliationRequest $request)
    {
        $req = $request->all();

        if ($request->hasFile('image')) {
            $affiliation_image = $this->imageservice->fileUpload($req["image"], "affiliation");
            $req["image"] = $affiliation_image;
        }

        $affiliation = Affiliation::create($req);

        return redirect()->route("admin.affiliations.index")->with("popsuccess", "Affiliation Added");
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
    public function edit(Affiliation $affiliation)
    {
        return view("admin.affiliation.edit", compact("affiliation"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAffiliationRequest $request, Affiliation $affiliation)
    {
        $req = $request->all();

        if ($request->hasFile('image')) {
            if ($affiliation->image) {
                $this->imageservice->imageDelete($affiliation->image);
            }
            $affiliation_image = $this->imageservice->fileUpload($req["image"], "affiliation");
            $req['image'] = $affiliation_image;
        }

        $affiliation->update($req);

        return redirect()->route("admin.affiliations.index")->with("popsuccess", "Affiliation Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Affiliation $affiliation)
    {
        if ($affiliation->image) {
            $this->imageservice->imageDelete($affiliation->image);
        }

        $affiliation->delete();

        return redirect()->route("admin.affiliations.index")->with("popsuccess", "Affiliation Deleted");
    }
}
