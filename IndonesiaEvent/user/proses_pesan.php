<?php

	include 'config/koneksi.php';
	$nama 			= $_POST['nama'];
	$alamat			= $_POST['alamat'];
	$tgl_pesan		= date('Y-m-d');
	$penumpang		= $_POST['penumpang'];
	$total 			= $_POST['total'];
	$invoice 		= mt_rand(1,1000);
	
	$insert			= "INSERT INTO pesanan (id_pesan, nama, alamat, tgl_pesan,  qty, total, invoice) VALUES ('','$nama','$alamat','$tgl_pesan','$penumpang','$total','$invoice')";

	$simpan			= mysqli_query($conn, $insert)or die(mysqli_error($conn));
	
    ?>

<center>
<h1>INVOICE :</h1>
		Nama Pemesan	:	<?php if(isset($_POST["nama"])){echo $_POST["nama"];}?><br>
		Alamat	:	<?php if(isset($_POST["alamat"])){echo $_POST["alamat"];}?><br>
		Jumlah Tiket	:	<?php if(isset($_POST["penumpang"])){echo $_POST["penumpang"];}?><br>
		Total	:	<?php if(isset($_POST["total"])){echo $_POST["total"];}?><br>
		
		
		<h5>
			<p>
				<b>Silahkan Anda Transfer ke No. Rekening yang tersedia pada halaman <a href="index.php?halaman=info_pembayaran">berikut</a> yang harus Anda bayar sesuai dengan Total yang tersedia diatas.
				</b>
			</p>
		</h5>
	</center>

	