<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class avatar_controller extends Controller
{
    public function save(Request $request){
		
		$idava = session('iduser');
		$filename = $request->input('filename');
        DB::table('avatar')->insert(
            ['id_avatar'=>$idava,'filename'=>$filename]);
    }
}