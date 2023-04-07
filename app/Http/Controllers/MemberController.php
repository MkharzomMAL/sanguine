<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){

        $members = Member::where('enable',1)->orderby('sort')->get();

        // dd($members);
        return view('team.index',compact('members')) ;
    }
}
