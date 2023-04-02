<?php

namespace App\Http\Controllers;

use App\Models\HomepageContent;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $homepage = HomepageContent::first();

        $videoData = json_decode($homepage->video);
        $videoUrl = asset('storage/' . $videoData[0]->download_link);

        return view('homepage',compact('homepage','videoUrl'));
    }

    public function services(){
        return view('services');

    }

    


    public function about(){
        return view('about') ;
    }
    
    
}
