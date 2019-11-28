<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class login_controller extends Controller
{
    //
    public function store(Request $request){
        $validatedata = $request->validate([
            'email'=>'required'
        ]);
        $username = $request->input('name');
        $email = $request->input('email');
        $nickname = $request->input('nickname');
        $password = $request->input('password');
        $cpassword = $request->input('repeat-password');
        if($password == $cpassword){
            if($validatedata == true){
                DB::table('user')->insert(
                    ['email'=>$email,'nickname'=>$nickname,'username'=>$username,'password'=>$password,'id_avatar'=>'1']
                );
            }
        }
        
        return redirect()->route('loginuser');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $data = DB::table('user')->get();
        $booleans = false;
        if($username == "admin" && $password == "admin"){
            return redirect()->route('adminhome');
        }
        foreach ($data as $isi) {
            if($isi->username == $username && $isi->password == $password){
                $booleans = true;
            }
        }
        if($booleans){
            $request->session()->put('nama',$username);
            return redirect()->route('halaman');
        }
    }
}
