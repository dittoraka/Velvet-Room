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
    public function gantipass(Request $request){
        $data = DB::table('user')->get();
        $pass = $request->input('old-password');
        $new = $request->input('new-password');
        foreach ($data as $key) {
            if($key->id_user == session('iduser')){
                if($key->password == $pass){
                    $data1 = DB::table('user')
                    ->where('username', session('nama'))->update(['password'=>$new]);
                }
            }
        }
        return view('user.profile-account-setting');
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
        $temp = DB::table('user')->where('username',$username)->get();
        DB::table('friends')->where('id_user',$temp[0]->id_user)->delete();
        DB::table('friends')->where('id_friend',$temp[0]->id_user)->delete();
        DB::table('user')->where('username',$username)->delete();
        $data = DB::table('user')->get();
        return view('admin.home',['user'=>$data]);
    }
    public function loaddelete(Request $request){
        $data = DB::table('user')->get();
        return view('admin.deleteuser',['user'=>$data]);
    }
    public function ngereportpost(Request $request){
        $id = $request->input('id');
        $post = DB::table('user_post')->where('id_post',$id)->get();
        return view('user.reportpage',['post'=>$post]);
    }
    public function reportpost(Request $request){
        $id = $request->input('id');
        $alasan = $request->input('alasan');
        DB::table('post_report')->insert(['id_post'=>$id,'alasan'=>$alasan,'id_user_report'=>session('iduser')]);
        return redirect()->route('halaman');
    }
    public function reportdis(Request $request){
        $id = $request->input('id');
        $post = DB::table('discussion')->where('id_discussion',$id)->get();
        return view('user.reportdis',['discussion'=>$post]);
    }
    public function ngereportdis(Request $request){
        $id = $request->input('id');
        $alasan = $request->input('alasan');
        DB::table('discussion_report')->insert(['id_discussion'=>$id,'alasan'=>$alasan,'id_user_report'=>session('iduser')]);
        return redirect()->route('halaman');
    }
    public function post_report(){
        $data = DB::table('post_report')->get();
        $data1 = DB::table('user_post')->get();
        return view('admin.postreport',['report'=>$data,'post'=>$data1]);
    }
    public function discuss_report(){
        $data = DB::table('discussion_report')->get();
        $data1 = DB::table('discussion')->get();
        return view('admin.discussionreport',['report'=>$data,'diss'=>$data1]);
    }
    public function detailpost(Request $request){
        $id = $request->input('id');
        $data = DB::table('user_post')->where('id_post',$id)->get();
        $data1 = DB::table('user')
                ->where('id_user',$data[0]->id_user)->get();
        $friend = DB::table('friends')->get();
        $data2 = DB::table('post_like')->get();
        $user = DB::table('user')->get();
        $komen = DB::table('post_comment')->get();
        return view('admin.detailpost',['post'=>$data,'komen'=>$komen,'user'=>$user,'relasi'=>$friend,'like'=>$data2]);
    }
    public function admindeletepost(Request $request){
        $id = $request->input('id');
        $dihapus = DB::table('user_post')->where('id_post',$id)->delete();
        $dihapus = DB::table('post_report')->where('id_post',$id)->delete();
        $data = DB::table('post_report')->get();
        $data1 = DB::table('user_post')->get();
        return view('admin.postreport',['report'=>$data,'post'=>$data1]);
    }
    public function admindeletediss(Request $request){
        $id = $request->input('id');
        $dihapus = DB::table('discussion')->where('id_discussion',$id)->delete();
        $dihapus = DB::table('discussion_report')->where('id_discussion',$id)->delete();
        $data = DB::table('discussion')->get();
        $data1 = DB::table('discussion_report')->get();
        return view('admin.discussionreport',['report'=>$data,'diss'=>$data1]);
    }
    public function searchorang(Request $request){
        $nama = $request->input('search');
        $dataz = DB::table('user')->orwhere('username','like',"$nama%")->get();
        return view('admin.home',['user'=>$dataz]);
    }
}
