<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherSetting;
use Illuminate\Http\Request;

class OtherSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setting = OtherSetting::first();
        return view('admin.OtherSetting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $setting = OtherSetting::find($id);
        $setting->update([
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'address' => $request->address,
            'googlemap' => $request->googlemap,
            'mainaddress' => $request->main_address,
            'tiktok' => $request->tiktok,
            'twitter' => $request->twitter,
            'short_description' => $request->short_description,
            'linkedin' => $request->linkedin,
        ]);
        return redirect()->back()->with('popsuccess', 'Details Successully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
