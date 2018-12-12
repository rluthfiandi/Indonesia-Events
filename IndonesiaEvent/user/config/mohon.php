<?php

	error_reporting(0);
	include 'koneksi.php';

	$namaevent		   = $_POST["namaevent"];
	$jadwal		  	= $_POST["jadwal"];
	$lokasievent	= $_POST["lokasievent"];

	$insert			= "INSERT INTO permohonan VALUES ('$namaevent','$jadwal','$lokasievent')";

	$simpan			= mysqli_query($conn, $insert)or die(mysqli_error($conn));

?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../index.php">