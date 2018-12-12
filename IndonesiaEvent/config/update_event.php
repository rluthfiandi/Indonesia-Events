<?php

	include 'koneksi.php';
	
	$id_event	= $_POST['id_event'];
	$kelas	= $_POST['kelas'];
	$harga	= $_POST['harga'];

	$update 	= "UPDATE event SET kelas='$kelas', harga='$harga' WHERE id_event='$id_event'";
	$updateevent	= mysqli_query($conn, $update)or die(mysqli_error());

if ($updateevent)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=manajemen_event">';
    }
else {
    	print"
    		<script>
    			alert(\"Data Gagal Diubah!\");
    			history.back(-1);
    		</script>";
    }
?>