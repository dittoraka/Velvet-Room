<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class friend_controller extends Controller
{
    //
    public function tampilin(){
        $data = DB::table('user')->get();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $friend = DB::table('friends')
                ->where('id_user',$data1[0]->id_user)->get();
        return view('user.profiles',['user'=>$data,'friend'=>$friend]);
    }
    public function liatuser(Request $request){
        $username = $request->input('username');
        $request->session()->put('friend',$username);
        $data = DB::table('user')
                ->where('username', $username)->get();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $friend = DB::table('friends')
                ->where('id_user',$data1[0]->id_user)->get();
        if($friend==null){
            $friend = array(array('id_user'=>0));
        }
        $post = DB::table('user_post')->where('id_user',$data[0]->id_user)->get();
        if($post==null){
            $post = array(array('id_user'=>0));
        }
        return view('user.user-profile',['user'=>$data,'friend'=>$friend,'post'=>$post]);
    }
    public function addfriend(){
        $yangdiadd = session('friend');
        $yangadd = session('nama');
        $data = DB::table('user')
                ->where('username',$yangdiadd)->get();
        $data1 = DB::table('user')
                ->where('username',$yangadd)->get();
        DB::table('friends')->insert(
                ['id_user'=>$data1[0]->id_user,'id_friend'=>$data[0]->id_user]
        ); 
        DB::table('friends')->insert(
            ['id_user'=>$data[0]->id_user,'id_friend'=>$data1[0]->id_user]
    ); 
        return view('user.user-profile',['user'=>$data]);           
    }
}
