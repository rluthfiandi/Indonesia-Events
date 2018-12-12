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
		<center><h2>Daftar Permohonan</h2></center>
		<hr><br>
		<form class="form-horizontal" method="POST">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Event</th>
						<th>Jadwal</th>
						<th>Lokasi</th>
					</tr>
				</thead>
				<tbody>
					<?php

						include '../config/koneksi.php';

						$query = mysqli_query($conn, "SELECT namaevent, jadwal, lokasievent FROM permohonan ORDER BY jadwal ASC")or die(mysqli_error($conn));
										if(mysqli_num_rows($query) == 0){	
							echo '<tr><td colspan="3" align="center">Tidak ada data!</td></tr>';		
						}
						else
						{	
							$no = 1;				
							while($data = mysqli_fetch_array($query)){	
								echo '<tr>';
								echo '<td>'.$no.'</td>';
								echo '<td>'.$data['namaevent'].'</td>';
								echo '<td>'.$data['jadwal'].'</td>';
								echo '<td>'.$data['lokasievent'].'</td>';
								$no++;	
							}
						}
			
				?>
				</tbody>
			</table>
		</form>
	</div>
</div>