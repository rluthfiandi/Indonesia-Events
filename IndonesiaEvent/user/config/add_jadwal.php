<?php

	include 'koneksi.php';

	$event		   	= $_POST["event"];
	$jadwal		  	= $_POST["jadwal"];
	$lokasi			= $_POST["lokasi"];

	$insert			= "INSERT INTO jadwal VALUES ('','$event','$jadwal','$lokasi')";

	$simpan			= mysqli_query($conn, $insert)or die(mysqli_error());

?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../admin/admin.php?halaman=manajemen_jadwal">