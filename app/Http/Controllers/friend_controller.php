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
    public function tampilinMessage(){
        $user = DB::table('user')->get();
        $data = DB::table('user')->get();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $msg = DB::table('message')->get();
        return view('user.messages',['msg'=>$msg,'friend'=>$data,'kita'=>$data1,'user'=>$user]);  
    }
    public function liatChat(Request $request){
        $id = $request->input('id');
        $request->session()->put('friend',$id);
        $user = DB::table('user')->get();
        $data = DB::table('user')
                ->where('id_user', $id)->get();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $msg = DB::table('message')
        ->orwhere('id_user',session('iduser'))->orwhere('id_user',$id)->get();
        return view('user.messages',['msg'=>$msg,'friend'=>$data,'kita'=>$data1,'user'=>$user]);    
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
        $komen = DB::table('post_comment')->get();
        if($komen==null){
            $komen = array(array('id_user'=>0));
        }
        return view('user.user-profile',['user'=>$data,'friend'=>$friend,'post'=>$post,'komen'=>$komen]);
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
        $post = DB::table('user_post')->where('id_user',$data[0]->id_user)->get();
        if($post==null){
            $post = array(array('id_user'=>0));
        }
        $friend = DB::table('friends')->get();
        $komen = DB::table('post_comment')->get();
        return view('user.user-profile',['user'=>$data,'friend'=>$friend,'post'=>$post,'komen'=>$komen]);           
    }
    public function delfriend(){
        $yangdiadd = session('friend');
        $yangadd = session('nama');
        $data = DB::table('user')
                ->where('username',$yangdiadd)->get();
        $data1 = DB::table('user')
                ->where('username',$yangadd)->get();
        DB::table('friends')->where('id_user',$data[0]->id_user)->where('id_friend',$data1[0]->id_user)->delete();
        DB::table('friends')->where('id_user',$data1[0]->id_user)->where('id_friend',$data[0]->id_user)->delete();
        $post = DB::table('user_post')->where('id_user',$data[0]->id_user)->get();
        $friend = DB::table('friends')->get();
        $komen = DB::table('post_comment')->get();
        return redirect()->route('profilorang');  
    }
    public function sendChat(Request $request){
        $data = DB::table('user')
                ->where('id_user', session('friend'))->get();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $user = DB::table('user')->get();
        $penerima_id = DB::table('user')
        ->where('id_user', session('friend'))->get('id_user');
        DB::table('message')->insert(
                ['id_user'=>session('iduser'),'id_penerima'=>session('friend'),'message'=>$request->input('message')]);
        $msg = DB::table('message')->get();
        return view('user.messages',['msg'=>$msg,'friend'=>$data,'kita'=>$data1,'user'=>$user]);   
    }
}
