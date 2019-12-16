<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class group_controller extends Controller
{
    public function load_group(){
        $relation = DB::table("user_group")->get();
        $data = DB::table("groups")->get();
        return view('user.judulgroup',['group'=>$data,"relasi"=>$relation]);
    }
    public function detail_group(Request $request){
        $nama = $request->input('nama');
        $data = DB::table("groups")->where('id_group',$nama)->get();
        $bool = false;
        $relasi = DB::table('user_group')->where('id_user',session('iduser'))->get();
        foreach($relasi as $item){
            if($data[0]->id_group == $item->id_group){
                $bool = true;
            }
        }
        $post = DB::table('post_group')->where('id_group',$nama)->get();
        $post_comment = DB::table('group_post_comment')->get();
        $request->session()->put('idgroup',$nama);
        return view('user.group',['group'=>$data,'komen'=>$bool,'post'=>$post,'comment'=>$post_comment]);
    }
    public function tambah(Request $request){
        $nama = $request->input('title');
        $des = $request->input('description');
        DB::table('groups')->insert(
            ['nama'=>$nama,'deskripsi'=>$des]
        );
        return redirect()->route('group');
    }
    public function join_group(Request $request){
        $id = $request->input('id');
        DB::table('user_group')->insert(
            ['id_group'=>$id,'id_user'=>session('iduser')]
        );
        return redirect()->route('group');
    }
    public function ngepost(Request $request){
        $isi = $request->input('description');
        DB::table('post_group')->insert(
            ['id_group'=>session('idgroup'),'post'=>$isi,'link'=>"",'nama_user'=>session('nama'),'likes'=>0]
        );
        return redirect()->route('group');
    }
    public function ngomen(Request $request){
        $id=$request->input('id');
        $comment = $request->input('komen');
        DB::table('group_post_comment')->insert(
            ['id_post'=>$id,'id_user'=>session('iduser'),'comments'=>$comment,'nickname'=>session('nickname')]
        );
        return redirect()->route('group');
    }
}
