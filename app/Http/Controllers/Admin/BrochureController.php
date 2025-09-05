<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Brochure;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class BrochureController extends Controller
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
        $brochures = Brochure::latest()->get();
        return view('admin.brochure.index', compact("brochures"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.brochure.add');

    }

    /**
     * Store a newly created resource in storage.
     */


     function randomString($length)
     {
         return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
     }
     public function fileUpload($file, $name)
     {
         $destinationPath = public_path() . '/uploads/';
         $randomString = $this->randomString(8);
         $imageName =  $name . "_" . $randomString .'.'. $file->extension();
         $file->move($destinationPath, $imageName);
         return $imageName;
     }


     public function store(Request $request)
     {
         //
         $req = $request->all();
         $popup_image = $this->imageservice->fileUpload($req["image"], "brochure");
         $req["image"] = $popup_image;

         $popup = Brochure::create($req);
         return redirect()->route("admin.brochures.index")->with("popsuccess", "Brochure Added");
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
    public function edit(String $id)
    {

        $brochures=Brochure::find($id);

        return view("admin.brochure.edit", compact("brochures"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {

        $brochures=Brochure::find($id);

        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($brochures->image) {
                $this->imageservice->imageDelete(filePath: $brochures->image);
            }
            $popup_image = $this->imageservice->fileUpload($req["image"], "brochure");
            $req['image'] = $popup_image;
        }

        $brochures->update($req);
        return redirect()->route("admin.brochures.index")->with("popsuccess", "Brochures Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

        $brochures=Brochure::find($id);

        if ($brochures->image) {
            $this->imageservice->imageDelete($brochures->image);
        }
        $brochures->delete();
        return redirect()->route("admin.brochures.index")->with("popsuccess", "Brochures Deleted");
    }
}
