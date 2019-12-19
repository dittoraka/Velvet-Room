<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class master_controller extends Controller
{
    // public function juduldis(){
    //     $data = DB::table('discussion')->get();
    //     return view('user.juduldiscussion',['user'=>$data]);
    // }
    public function detaildis(Request $request){
        $id = $request->input('iddis');
        $data = DB::table('discussion')->
            where('id_discussion',$id)->get();
        $komen = DB::table('discussion_comment')->where('id_dis',$id)->get();
        if($komen==null){
            $komen = array(array('id_user'=>0));
        }
        return view('user.detaildiscussion',['discuss'=>$data,'komen'=>$komen]);
    }
    public function juduldis(){
        $data = DB::table('discussion')->get();
        if($data==null){
            $data = array(array('id_user'=>0));
        }
        return view('user.juduldiscussion',['discuss'=>$data]);
    }
    public function opengroup(){
        $data = DB::table('user')->get();
        return view('user.group',['user'=>$data]);
    }
    public function likee(Request $request){
        $relasi = DB::table('discussion_like')->get();
        $bol = true;
        foreach ($relasi as $key) {
            if(session('iduser')==$key->id_user){
                $bol = false;
            }
        }
        if($bol){
            $id = $request->input('id');
            $data = DB::table('discussion')->where('id_discussion',$id)->get();
            $like = $data[0]->likes;
            $like +=1;
            DB::table('discussion')->where('id_discussion',$id)->update(['likes'=>$like]);
            DB::table('discussion_like')->insert(['id_dis'=>$id,'id_user'=>session('iduser')]);
            return redirect()->route('discus');
        }else{
            $id = $request->input('id');
            $data = DB::table('discussion')->where('id_discussion',$id)->get();
            $like = $data[0]->likes;
            $like -=1;
            DB::table('discussion')->where('id_discussion',$id)->update(['likes'=>$like]);
            DB::table('discussion_like')->where('id_user',session('iduser'))->where('id_dis',$id)->delete();
            return redirect()->route('discus');
        }
    }
    public function searchnav(Request $request){
        $nama = $request->input('search');
        $dataz = DB::table('user')->orwhere('nickname','like',"$nama%")->get();
        $group = DB::table('groups')->orwhere('nama','like',"$nama%")->get();
        $relasi = DB::table('user_group')->where('id_user',session('iduser'))->get();
        $data = DB::table('user')->get();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $friend = DB::table('friends')
                ->where('id_user',$data1[0]->id_user)->get();
        return view('user.search',['user'=>$dataz,'friend'=>$friend,'group'=>$group,'relasi'=>$relasi]);
    }
    public function komendis(Request $request){
        $id=$request->input('id');
        $comment = $request->input('description');
        DB::table('discussion_comment')->insert(
            ['id_dis'=>$id,'text'=>$comment,'likes'=>0,'nickname'=>session('nickname')]
        );
        return redirect()->route('discus');
    }
    public function deletekomen(Request $request){
        $id=$request->input('id');
        DB::table('discussion_comment')->where('dis_comment_id',$id)->delete();
        return redirect()->route('discus');
    }
    public function deletedis(Request $request){
        $id=$request->input('id');
        DB::table('discussion')->where('id_discussion',$id)->delete();
        DB::table('discussion_comment')->where('id_dis',$id)->delete();
        return redirect()->route('discus');
    }
}
