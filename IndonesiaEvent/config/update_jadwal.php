<?php

	include 'koneksi.php';

	$id_jadwal   = $_POST['id_jadwal'];
    $event         = $_POST['event'];
    $jadwal         = $_POST['jadwal'];
    $lokasi           = $_POST['lokasi'];

	$update 	    = "UPDATE jadwal SET event='$event', jadwal='$jadwal', lokasi='$lokasi' WHERE id_jadwal='$id_jadwal'";
	$updatejadwal	= mysqli_query($conn, $update)or die(mysqli_error());

    if ($updatejadwal)
        {
    	   echo "<strong><center>Data Berhasil Diubah";
    	   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=manajemen_jadwal">';
        }
    else 
        {
    	   print"
    	       <script>
    	           alert(\"Data Gagal Diubah!\");
    	           history.back(-1);
    	       </script>";
    }
?>