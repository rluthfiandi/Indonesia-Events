<?php

	include "config/koneksi.php";

	$id_berangkat = $_GET["id_jadwal"];
	$query = "SELECT * FROM event WHERE id_jadwal = '$id_jadwal'";
	$sql = mysqli_query($conn,$query)or die(mysqli_error());
	
	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['id_event']; ?>"><?php echo $row["kelas"] ?> | <?php echo $row["harga"]; ?></option>
	<?php
	}
	?>
?>