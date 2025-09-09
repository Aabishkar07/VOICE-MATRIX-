<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Page;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = Page::where('id', 3)->first();
        $certificates = Certificate::get();
        $teams = Team::latest()->get();
        $mission = Page::where('id', 4)->first();
        $vision = Page::where('id', 5)->first();
        $corevalue = Page::where('id', 6)->first();
        return view('frontend.about.index', compact('teams', 'about', 'certificates', 'mission', 'vision', 'corevalue'));
    }
}
