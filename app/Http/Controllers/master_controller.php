<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class master_controller extends Controller
{
    public function juduldis(){
        $data = DB::table('discussion')->get();
        return view('user.juduldiscussion',['user'=>$data]);
    }
    public function detaildis(){
        $data = DB::table('discussion')->get();
        return view('user.detaildiscussion',['user'=>$data]);
    }
}
