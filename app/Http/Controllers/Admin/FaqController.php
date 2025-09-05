<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view("admin.faq.index", compact("faqs"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.faq.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $req = $request->all();
        Faq::create($req);
        return redirect()->route("admin.faqs.index")->with("popsuccess", "Faq Added");
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
    public function edit(Faq $faq)
    {
        return view("admin.faq.edit", compact("faq"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $req = $request->all();
        $faq->update($req);
        return redirect()->route(route: "admin.faqs.index")->with("popsuccess", "Faq Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route(route: "admin.faqs.index")->with("popsuccess", "Faq Deleted");
    }
}
