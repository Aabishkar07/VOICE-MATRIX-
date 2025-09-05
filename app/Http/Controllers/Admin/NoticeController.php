<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
        $notices=Notice::get();
        return view('admin.notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.notice.create');

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
        $popup_image = $this->fileUpload($req["image"], "notice");
        $req["image"] = $popup_image;

        $popup = Notice::create($req);
        return redirect()->route("admin.notice.index")->with("popsuccess", "Notice Added");
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
    public function edit(Notice $notice)
    {
        return view("admin.notice.edit", compact("notice"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notice $notice)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($notice->image) {
                $this->imageservice->imageDelete(filePath: $notice->image);
            }
            $popup_image = $this->fileUpload($req["image"], "notice");
            $req['image'] = $popup_image;
        }

        $notice->update($req);
        return redirect()->route("admin.notice.index")->with("popsuccess", "Notice Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        if ($notice->image) {
            $this->imageservice->imageDelete($notice->image);
        }
        $notice->delete();
        return redirect()->route("admin.notice.index")->with("popsuccess", "Notice Deleted");
    }
}
