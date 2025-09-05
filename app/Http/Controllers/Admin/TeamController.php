<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $team=Team::latest()->get();
        return view('admin.Teams.index',compact("team"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.Teams.create');

    }

    public function fileUpload(Request $request, $image, $name)
    {
        $imageName = '';
        if ($request->hasFile($image) && $request->file($image)->isValid()) {
            $imageFile = $request->file($image);
            $destinationPath = public_path() . '/uploads/';
            $imageName = date('YmdHis') . $name . "." . $imageFile->getClientOriginalExtension();
            $imageFile->move($destinationPath, $imageName);
        }
        return $imageName;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $img = $this->fileUpload($request, 'image', 'images');

        Team::create([
            'name' => $request->name,
            'image' => $img,
            'designation' => $request->designation,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'portfolio'=>$request->portfolio,
            'number'=>$request->number,
        ]);

        return redirect()->route('admin.teams.index')->with('popsuccess', 'Team created successfully');
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
        $team=Team::find($id);
        return view('admin.Teams.edit' , compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            // 'designation' => 'required|string|max:255',
        ]);
        $team = Team::findOrFail($id);
        if ($request->hasFile('image')) {

            // dd('hi');
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/uploads/'), $imageName);
            $teamimage = $imageName;
        } else {
            $teamimage = Team::where('id', '=', $id)->pluck('image')->first();
        }

        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $teamimage,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'portfolio'=>$request->portfolio,
            'number'=>$request->number,

        ]);

        return redirect()->route('admin.teams.index')->with('popsuccess', 'team updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $team = Team::find($id);

        if (!$team) {
            return redirect('teams.index')->with('poperror', 'Team not found');
        }

        $imagePath = $team->image;
        if ($imagePath) {
            $this->imageDelete($imagePath);
        }

        $team->delete();
        return redirect()->route('admin.teams.index')->with('popsuccess', 'Team deleted successfully');
    }

    public function imageDelete($filePath)
    {
        if($filePath){


        $destinationPath = public_path('uploads/');

        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }
    }
}
