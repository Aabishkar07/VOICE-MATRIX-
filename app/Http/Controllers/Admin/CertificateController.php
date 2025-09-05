<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CertificateController extends Controller
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
        $certificates = Certificate::latest()->get();
        return view('admin.certificate.index', compact("certificates"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.certificate.add');
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

    public function store(StoreCertificateRequest $request)
    {
        $req = $request->all();
        $blog_image = $this->fileUpload($req["featured_image"], "certificate");
        $req["featured_image"] = $blog_image;
        // $req["category_id"] = $request->category;
        $req['slug'] = Str::slug($request->title);

        $blog = Certificate::create($req);
        return redirect()->route("admin.certificate.index")->with("popsuccess", "Certificate Added");
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
        $blog = Certificate::find($id);

        return view("admin.certificate.edit", compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, string $id)
    {
        //
        $blog = Certificate::find($id);
        $req = $request->all();
        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                $this->imageservice->imageDelete($blog->featured_image);
            }
            $blog_image = $this->fileUpload($req["featured_image"], "certificate");
            $req['featured_image'] = $blog_image;
        }

        $blog->update($req);
        return redirect()->route("admin.certificate.index")->with("popsuccess", "Certificate Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //
        $blog = Certificate::find($id);
        if ($blog->featured_image) {
            $this->imageservice->imageDelete($blog->featured_image);
        }
        $blog->delete();
        return redirect()->route("admin.certificate.index")->with("popsuccess", "Certificate Deleted");
    }
}
