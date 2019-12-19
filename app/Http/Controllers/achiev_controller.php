<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class achiev_controller extends Controller
{
    public function loadachiev(){
        $data = DB::table('user_achievment')->where('id_user',session('iduser'))->get();
        return view('achievment',['achiev'=>$data]);
        
    }
}
