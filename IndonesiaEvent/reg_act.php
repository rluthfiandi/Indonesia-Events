<?php

	error_reporting(0);
	
	include 'config/koneksi.php';

	$nama   	= $_POST["nama"];
	$username   	= $_POST["username"];
	$password	  	= md5($_POST["password"]);
	$level			= $_POST["level"];

	$insert			= "INSERT INTO user VALUES ('','$nama','$username','$password','$level')";

	$simpan			= mysqli_query($conn, $insert)or die(mysqli_error($conn));

?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL= admin/index.php">