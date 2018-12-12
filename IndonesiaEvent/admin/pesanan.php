	<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #ff1645}

th {
    background-color: #f2375d;
    color: white;
}
</style>
<div class="row">
	<div class="col-md-12">
		<center><h2>Daftar Pesanan</h2></center>
		<hr><br>
		<form class="form-horizontal" method="POST">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Tanggal Pesan</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Invoice</th>
					</tr>
				</thead>
				<tbody>
					<?php

						include '../config/koneksi.php';

						$query = mysqli_query($conn, "SELECT nama, alamat, tgl_pesan, qty, total, invoice FROM pesanan ORDER BY id_pesan ASC")or die(mysqli_error($conn));
										if(mysqli_num_rows($query) == 0){	
							echo '<tr><td colspan="3" align="center">Tidak ada data!</td></tr>';		
						}
						else
						{	
							$no = 1;				
							while($data = mysqli_fetch_array($query)){	
								echo '<tr>';
								echo '<td>'.$no.'</td>';
								echo '<td>'.$data['nama'].'</td>';
								echo '<td>'.$data['alamat'].'</td>';
								echo '<td>'.$data['tgl_pesan'].'</td>';
								echo '<td>'.$data['qty'].'</td>';
								echo '<td>'.$data['total'].'</td>';
								echo '<td>'.$data['invoice'].'</td>';
								
								$no++;	
							}
						}
			
				?>
				</tbody>
			</table>
		</form>
	</div>
</div>