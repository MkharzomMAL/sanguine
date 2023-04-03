<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\HomepageContent;
use App\Models\Service;
use App\Models\ServiceLogo;
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

        $servicepage = Service::first();

        $videoData = json_decode($servicepage->video);

        $companies = ServiceLogo::orderBy('sort')->limit(6)->get();

        // dd($company);
        return view('services',compact('servicepage','videoData','companies'));

    }

    


    public function about(){

        $aboutpage = AboutUs::first();

        $videoData = json_decode($aboutpage->video);
        

        return view('about',compact('aboutpage','videoData')) ;


    }
    
    
}
