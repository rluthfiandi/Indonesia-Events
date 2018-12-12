<br><br>
    <h3>
        <div align="center">Info Event</div>
    </h3>
    <br><br><br>


	<form class="form-horizontal">
  		<table class="table table-striped">
    		<thead>
      			<tr>
					<th>No</th>
					<th>Event</th>
					<th>Lokasi</th>
					<th>Waktu</th>

					
     			</tr>
    		</thead>
    		<tbody>
    			<?php

    				include 'config/koneksi.php';

					$query = mysqli_query($conn, "SELECT * FROM jadwal ORDER BY jadwal ASC")or die(mysqli_error());
						if(mysqli_num_rows($query) == 0){	
							echo '<tr><td colspan="3" align="center">Tidak ada data!</td></tr>';		
						}
						else
						{	
							$no = 1;				
							while($data = mysqli_fetch_array($query)){	
								echo '<tr>';
								echo '<td>'.$no.'</td>';
								echo '<td>'.$data['event'].'</td>';
								echo '<td>'.$data['lokasi'].'</td>';
								echo '<td>'.$data['jadwal'].'</td>';
								$no++;	
							}
						}
			
				?>
				
    		</tbody>
  		</table>
	</form>
</center>