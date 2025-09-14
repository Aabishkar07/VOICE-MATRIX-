<?php

namespace App\Http\Controllers;

use App\Models\MetaPage;
use Illuminate\Http\Request;

class MetaPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metapages = MetaPage::all();
        return view('admin.metapage.index', compact('metapages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.metapage.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required',
            'keywords' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        MetaPage::create($request->all());

        return redirect()->route('admin.metapages.index')->with('popsuccess', 'Meta page created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MetaPage $metapage)
    {
        return view('admin.metapage.show', compact('metapage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MetaPage $metapage)
    {
        return view('admin.metapage.edit', compact('metapage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MetaPage $metapage)
    {
        $request->validate([
            'keywords' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $metapage->update($request->all());

        return redirect()->route('admin.metapages.index')->with('popsuccess', 'Meta page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MetaPage $metapage)
    {
        $metapage->delete();
        return redirect()->route('admin.metapages.index')->with('popsuccess', 'Meta page deleted successfully');
    }
}
