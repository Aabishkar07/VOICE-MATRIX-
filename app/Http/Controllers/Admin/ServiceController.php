<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
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

        $parent_id = request('services') ?? 0;
        $services = Service::where('parent_id', $parent_id)->latest()->get();
        return view("admin.services.index", compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.services.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $req = $request->all();
        $service_image = $this->imageservice->fileUpload($req["image"], "service");
        $req["image"] = $service_image;
        $req['slug'] = str::slug($request->title);
        $req['parent_id'] = $request->parent_id ?? 0;
        $service = Service::create($req);

        if ($service->parent_id > 0) {
            return redirect()->route('admin.services.index', ['services' => $service->parent_id])->with('popsuccess', 'Sub Service Added');
        } else {
            return redirect()->route("admin.services.index")->with("popsuccess", "Service Added");
        }
        // return redirect()->route("admin.services.index")->with("popsuccess", "Service Added");
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
    public function edit(Service $service)
    {
        return view("admin.services.edit", compact("service"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($service->image) {
                $this->imageservice->imageDelete($service->image);
            }
            $service_image = $this->imageservice->fileUpload($req["image"], "service");
            $req['image'] = $service_image;
        }
        $req['slug'] = Str::slug($request->title);
        // $req["category_id"] = $request->category;
        $req['parent_id'] = $request->parent_id ??
            $service->update($req);

        if ($service->parent_id > 0) {
            return redirect()->route('admin.services.index', ['services' => $service->parent_id])->with('popsuccess', 'Sub Service Edited');
        } else {
            return redirect()->route("admin.services.index")->with("popsuccess", "Service Edited");
        }
        // return redirect()->route("admin.services.index")->with("popsuccess", "Service Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Service $service)
    {
        if ($service->image) {
            $this->imageservice->imageDelete($service->image);
        }
        if ($service->parent_id == 0) {
            $subs = Service::where("parent_id", $service->id)->get();
            foreach ($subs as $sub) {
                if ($sub->image) {
                    $this->imageservice->imageDelete($sub->image);
                }
            }
            $delsub = Service::where("parent_id", 0)->delete();
        }
        $service->delete();

        return redirect()->back()->with('popsuccess', ' Service Deleted');

    }
}
