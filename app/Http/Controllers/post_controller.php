<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class post_controller extends Controller
{
    //
    public function loadpost(){
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $data = DB::table('user_post')->where('id_user',$data1[0]->id_user)->get();
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        return view('user.home',['user'=>$data]);
    }
    public function loadpostprofil(){
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $data = DB::table('user_post')->where('id_user',$data1[0]->id_user)->get();
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        return view('user.my-profile-feed',['user'=>$data]);
    }
    public function ngepost(Request $request){
        $post = $request->input('description');
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        DB::table('user_post')->insert(
            ['id_user'=>$data1[0]->id_user,'post'=>$post,'likes'=>0,'link'=>'']
        );
        return redirect()->route('halaman');
    }
}
