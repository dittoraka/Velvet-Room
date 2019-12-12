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
            ['id_avatar'=>$idava,'filename'=>$filename]
		);
        // $servername = "localhost";
	    // $server_username = "root";
	    // $server_password = "";
	    // $dbName = "velvet_room";
	
	    // $userID = $_POST["userID"];
	    // $fileupload = $_POST["fileupload"];
	
	    // $conn = new mysqli($servername,$server_username,$server_password,$dbName);
	
	    // $sql = "INSERT INTO avatar VALUES('$userID','$fileupload')";
    	// $result = mysqli_query($conn,$sql);
    }
}