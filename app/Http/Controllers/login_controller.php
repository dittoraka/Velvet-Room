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
            if($validatedata){
                DB::table('user')->insert(
                    ['email'=>$email,'nickname'=>$nickname,'username'=>$username,'password'=>$password,'id_avatar'=>'1','profil_picture'=>"far-circle.png",'back_image'=>'cover-img.jpg']
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
                $id = $isi->id_user;
                $pic = $isi->profil_picture;
                $request->session()->put('nickname',$isi->nickname);
                $request->session()->put('back',$isi->back_image);
            }
        }
        if($booleans){
            $request->session()->put('nama',$username);
            $request->session()->put('profil',$pic);
            $request->session()->put('iduser',$id);
            return redirect()->route('halaman');
        }else{
            return redirect()->route('loginuser');
        }
    }
}
