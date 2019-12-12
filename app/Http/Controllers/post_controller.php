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
        $friend = DB::table('friends')
                ->where('id_user', $data1[0]->id_user)->get();
        // $data = DB::table('user_post')->orwhere('id_user',$data1[0]->id_user)->get();
        if($friend){
            $data = DB::table('user_post')->get();
        }else{
            $data = DB::table('user_post')->orwhere('id_user',$data1[0]->id_user)->orwhere('id_user',$friend)->get();
        }
        
        $komen = DB::table('post_comment')->get();
        if($komen==null){
            $komen = array(array('id_user'=>0));
        }
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        return view('user.home',['post'=>$data,'komen'=>$komen,'teman'=>$friend]);
    }
    public function loadpostprofil(){
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $data = DB::table('user_post')->where('id_user',$data1[0]->id_user)->get();
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        $user = DB::table('user')->get();
        return view('user.my-profile-feed',['user'=>$data]);
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
            ['id_user'=>$data1[0]->id_user,'post'=>$post,'likes'=>0,'link'=>'','nama_user'=>session('nickname')]
        );
        return redirect()->route('halaman');
    }
    public function ngomen(Request $request){
        $id=$request->input('id');
        $comment = $request->input('komen');
        DB::table('post_comment')->insert(
            ['id_post'=>$id,'comments'=>$comment,'likes'=>0,'nickname'=>session('nickname')]
        );
        return redirect()->route('halaman');
    }
}
