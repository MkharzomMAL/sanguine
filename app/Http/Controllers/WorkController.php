<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        $works = Work::where('enable', 1 )->get();
        // dd($works);
        return view('works.index',compact('works')) ;
    }

    public function show(Request $request){

        $work = Work::where('slug' , $request->slug)->first();

        $videoData = json_decode($work->video);

        return view('works.show',compact('work','videoData'));
    }
}
