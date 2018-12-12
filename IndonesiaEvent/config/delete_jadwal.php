<?php

	include 'koneksi.php';	

	$id_jadwal 	= $_GET['id_jadwal'];

	$hapus	= "DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'";
	$query 	= mysqli_query($conn, $hapus);

	//echo "Data Telah Terhapus";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/admin.php?halaman=manajemen_jadwal'>";
	//echo "<meta http-equiv='refresh' content='0; url=../admin/index.php?halaman=info'>";

?>