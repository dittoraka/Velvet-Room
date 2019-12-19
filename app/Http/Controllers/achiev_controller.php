<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class achiev_controller extends Controller
{
    public function loadachiev(){
        $data = DB::table('user_achievment')->get();
        return view('user.achievement',['achiev'=>$data]);
    }
    public function loadbadges(){
        $data = DB::table('user_badges')->get();
        return view('user.badges',['badges'=>$data]);
    }
}
