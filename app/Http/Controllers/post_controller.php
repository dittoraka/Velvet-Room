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
        return view('user.home',['post'=>$data]);
    }
    public function loadpostprofil(){
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $data = DB::table('user_post')->where('id_user',$data1[0]->id_user)->get();
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        $user = DB::table('user')->get();
        return view('user.my-profile-feed',['post'=>$data]);
    }
    public function postdiss(Request $request){
        $isi = $request->input('description');
        $post = $request->input('title');
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        DB::table('discussion')->insert(
            ['id_user'=>$data1[0]->id_user,'discuss_name'=>$post,'discuss_thread'=>$isi,'likes'=>0,'link'=>'']
        );
        return redirect()->route('discus');
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
