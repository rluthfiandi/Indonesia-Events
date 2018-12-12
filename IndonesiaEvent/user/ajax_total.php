<?php
	include "config/koneksi.php";

	$id_kelas = $_GET["id_kelas"];
	$penumpang = $_GET["penumpang"];

	$query = "SELECT * FROM event WHERE id_event = '$id_kelas'";
	$sql = mysqli_query($conn,$query)or die(mysqli_error());
	$row = mysqli_fetch_array($sql);

	$total = $row["harga"] * $penumpang;

	echo $total;
	
?>