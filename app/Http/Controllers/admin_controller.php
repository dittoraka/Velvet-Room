<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class admin_controller extends Controller
{
    public function load(){
        $data = DB::table('user')->get();
        return view('admin.home',['user'=>$data]);
    }
    public function update(Request $request){
        $data = DB::table('user')->get();
        $username = $request->input('username');
        $email = $request->input('email');
        $nickname = $request->input('nickname');
        $password = $request->input('password');
        $cpassword = $request->input('newpassword');
            DB::table('user')
                ->where('username', $username)
                ->update(['email'=>$email,'nickname'=>$nickname,'password'=>$cpassword]);
        $data = DB::table('user')->get();
        return view('admin.deleteuser',['user'=>$data]);

    }
    public function delete(Request $request){
        $username = $request->input('username');
        DB::table('user')->where('username',$username)->delete();
        $data = DB::table('user')->get();
        return view('admin.deleteuser',['user'=>$data]);
    }
    public function loaddelete(){
        $data = DB::table('user')->get();
        return view('admin.deleteuser',['user'=>$data]);
    }
}
