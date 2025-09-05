<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(
        protected ImageService $imageservice
    ) {}
    public function index()
    {
        //
        $popups=Popup::get();
        return view('admin.popup.index',compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.popup.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $req = $request->all();
        $popup_image = $this->imageservice->fileUpload($req["image"], "popup");
        $req["image"] = $popup_image;

        $popup = Popup::create($req);
        return redirect()->route("admin.popup.index")->with("popsuccess", "popup Added");
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
    public function edit(Popup $popup)
    {
        return view("admin.popup.edit", compact("popup"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Popup $popup)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($popup->image) {
                $this->imageservice->imageDelete(filePath: $popup->image);
            }
            $popup_image = $this->imageservice->fileUpload($req["image"], "popup");
            $req['image'] = $popup_image;
        }

        $popup->update($req);
        return redirect()->route("admin.popup.index")->with("popsuccess", "popup Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Popup $popup)
    {
        if ($popup->image) {
            $this->imageservice->imageDelete($popup->image);
        }
        $popup->delete();
        return redirect()->route("admin.popup.index")->with("popsuccess", "popup Deleted");
    }
}
