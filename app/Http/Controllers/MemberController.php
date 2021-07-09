<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberList(){
        $member = Member::all();
        return view('front.member.list',compact('member'));
    }

    public function boardMember(){
        $board = Board::where('active',1)->first();
        return view('front.member.board',compact('board'));
    }
}
