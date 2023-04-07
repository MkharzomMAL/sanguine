<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\TeamPage;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request){

        $members = Member::where('enable',1)->orderby('sort')->get();
        $teamPage = TeamPage::get()->first();
        // dd($members);
        return view('team.index',compact('members','teamPage')) ;
    }
}
