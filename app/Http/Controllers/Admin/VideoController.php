<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $videos = Video::latest()->get();
        return view("admin.video.index", compact("videos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.video.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        $req = $request->all();

        $req['slug'] = Str::slug($request->title);

        $category = Video::create($req);

        return redirect()->route('admin.videos.index')->with('popsuccess', 'Video Added');
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
    public function edit(Video $video)
    {
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, video $video)
    {
        $req = $request->all();
        $req['slug'] = Str::slug($request->title);
        $video->update($req);

        return redirect()->route('admin.videos.index')->with('popsuccess', 'Video Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Video $video)
    {

        $video->delete();
        return redirect()->route('admin.videos.index')->with('popsuccess', 'Video Deleted');
    }
}
