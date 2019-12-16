<?php
	$servername = "localhost";
	$server_username = "root";
	$server_password = "";
	$dbName = "velvet_room";
	
	$userID = $_POST["userID"];
	$fileupload = $_POST["fileupload"];
	
	$conn = new mysqli($servername,$server_username,$server_password,$dbName);
	
	$sql = "INSERT INTO avatar VALUES('$userID','$fileupload')";
	$result = mysqli_query($conn,$sql);
?>