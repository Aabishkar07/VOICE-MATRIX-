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
    public function index(){
        $about = Page::where('id', 3)->first();
        $certificates=Certificate::get();
        $teams = Team::latest()->get();
        return view('frontend.about.index' , compact('teams', 'about','certificates'));
    }
}
