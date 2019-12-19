<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Http\UploadedFile;

class post_controller extends Controller
{
    //
    public function loadpost(){
        $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
        $friend = DB::table('friends')->get();
        $data2 = DB::table('post_like')->get();
        // $data = DB::table('user_post')->orwhere('id_user',$data1[0]->id_user)->get();
        $data = DB::table('user_post')->orderByRaw("id_post DESC")->get();
        $user = DB::table('user')->get();
        $message = DB::table('message')->get();
        $komen = DB::table('post_comment')->get();
        return view('user.home',['post'=>$data,'komen'=>$komen,'user'=>$user,'relasi'=>$friend,'like'=>$data2,'chat'=>$message]);
    }
    public function chatbox(){

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
        $komen = DB::table('post_comment')->get();
        if($komen==null){
            $komen = array(array('id_user'=>0));
        }
        return view('user.my-profile-feed',['user'=>$data,'komen'=>$komen,'profil'=>$data1]);
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
        $gambar = $request->picture;
        
        if(isset($gambar) && isset($post)){
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
            DB::table('user_post')->insert(
                ['id_user'=>$data1[0]->id_user,'post'=>$post,'likes'=>0,'link'=>'','nama_user'=>session('nickname'),'gambar'=>$imageName]
            );
            request()->picture->move(public_path('upload'), $imageName);
            return redirect()->route('halaman');
        
        }
        else if(isset($gambar)){
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            $post = $request->input('description');
            $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
            DB::table('user_post')->insert(
                ['id_user'=>$data1[0]->id_user,'post'=>"",'likes'=>0,'link'=>'','nama_user'=>session('nickname'),'gambar'=>$imageName]
            );
            request()->picture->move(public_path('upload'), $imageName);
            return redirect()->route('halaman');
        }else {
            $data1 = DB::table('user')
                ->where('username', session('nama'))->get();
            DB::table('user_post')->insert(
                ['id_user'=>$data1[0]->id_user,'post'=>$post,'likes'=>0,'link'=>'','nama_user'=>session('nickname'),'gambar'=>""]
            );
            return redirect()->route('halaman');
            
        }
    }
    public function ganti(Request $request){
        $imageName = time().'.'.request()->picture->getClientOriginalExtension();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->update(['profil_picture'=>$imageName]);
        request()->picture->move(public_path('profil'), $imageName);
        $request->session()->put('profil',$imageName);
        return redirect()->route('profil');
    }
    public function gantiback(Request $request){
        $imageName = time().'.'.request()->picture->getClientOriginalExtension();
        $data1 = DB::table('user')
                ->where('username', session('nama'))->update(['back_image'=>$imageName]);
        request()->picture->move(public_path('background'), $imageName);
        $request->session()->put('back',$imageName);
        return redirect()->route('profil');
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
    public function deletekomen(Request $request){
        $id=$request->input('id');
        DB::table('post_comment')->where('id_commentuser',$id)->delete();
        return redirect()->route('halaman');
    }
    public function likee(Request $request){
        $relasi = DB::table('post_like')->get();
        $bol = true;
        foreach ($relasi as $key) {
            if(session('iduser')==$key->id_user){
                $bol = false;
            }
        }
        if($bol){
            $id = $request->input('id');
            $data = DB::table('user_post')->where('id_post',$id)->get();
            $like = $data[0]->likes;
            $like +=1;
            DB::table('user_post')->where('id_post',$id)->update(['likes'=>$like]);
            DB::table('post_like')->insert(['id_post'=>$id,'id_user'=>session('iduser')]);
            return redirect()->route('halaman');
        }else{
            $id = $request->input('id');
            $data = DB::table('user_post')->where('id_post',$id)->get();
            $like = $data[0]->likes;
            $like -=1;
            DB::table('user_post')->where('id_post',$id)->update(['likes'=>$like]);
            DB::table('post_like')->where('id_user',session('iduser'))->where('id_post',$id)->delete();
            return redirect()->route('halaman');
        }
    }
    public function deletepost(Request $request){
        $id=$request->input('id');
        DB::table('user_post')->where('id_post',$id)->delete();
        DB::table('post_comment')->where('id_post',$id)->delete();
        return redirect()->route('halaman');
    }
    public function editpost(Request $request){
        $id = $request->input('id');
        $post = DB::table('user_post')->where('id_post',$id)->get();
        return view('user.editpost',['post'=>$post]);
    }
    public function ngeditpost(Request $request){
        $id = $request->input('id');
        $post = $request->input('description');
        
        $gambar = $request->picture;
        if(isset($gambar)){
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            DB::table('user_post')
                ->where('id_post', $id)
                ->update(['post'=>$post,'gambar'=>$imageName]);
            request()->picture->move(public_path('upload'), $imageName);
        }else{
            DB::table('user_post')
                ->where('id_post', $id)
                ->update(['post'=>$post]);
        }
        return redirect()->route('halaman');
    }
}
