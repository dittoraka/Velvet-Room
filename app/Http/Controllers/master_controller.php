<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class master_controller extends Controller
{
    // public function juduldis(){
    //     $data = DB::table('discussion')->get();
    //     return view('user.juduldiscussion',['user'=>$data]);
    // }
    public function detaildis(Request $request){
        $id = $request->input('iddis');
        $data = DB::table('discussion')->
            where('id_discussion',$id)->get();
        return view('user.detaildiscussion',['discuss'=>$data]);
    }
    public function opengroup(){
        $data = DB::table('user')->get();
        return view('user.group',['user'=>$data]);
    }
    public function juduldis(){
        $data = DB::table('discussion')->get();
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        return view('user.juduldiscussion',['discuss'=>$data]);
    }
}
