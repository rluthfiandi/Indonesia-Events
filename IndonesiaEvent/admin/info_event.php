<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #accaf9}

th {
    background-color: #0f5fe0;
    color: white;
}	
</style>

<div class="row">
	<div class="col-md-12">
		<h2><p><center>Manajemen Event</center></p></h2>
		<hr>
		<br>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Tambah</button>
		<br><br>
		<form class="form-horizontal">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php

						include '../config/koneksi.php';

						$query = mysqli_query($conn, "SELECT id_event, kelas, harga FROM event")or die(mysqli_error());
										if(mysqli_num_rows($query) == 0){	
											echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';	
										}
											else
										{	
											$no = 1;				
											while($data = mysqli_fetch_array($query)){	
						 						echo '<tr>';
												echo '<td>'.$no.'</td>';
												echo '<td>'.$data['kelas'].'</td>';
												echo '<td>'.$data['harga'].'</td>';
												echo '<td><a href=admin.php?halaman=edit_event&&id_event='.$data['id_event'].'><span class="glyphicon glyphicon-edit"></a></td>';
												echo '<td><a href=../config/delete_event.php?id_event='.$data['id_event'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
												echo '</tr>';
												$no++;	
											}
										}
							
								?>
				    				
				</tbody>
			</table>
		</form>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

    	<!-- Modal content-->
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" align="center">Tambahkan Data Event</h4>
      		</div>
      		<div class="modal-body">
      			<form action="../config/add_event.php" class="form-horizontal" method="POST">
					<div class="form-group">
      					<label class="control-label col-sm-4">Event :</label>
      				    <div class="col-sm-6">
      				        <select class="form-control" name="id_jadwal" id="event">
                    <option>--Pilih Event--</option>
                    <?php
                    $event = "SELECT * FROM jadwal";
                    $queryEvent = mysqli_query($conn,$event);
                    while ($dataEvent = mysqli_fetch_array($queryEvent)) { ?>
                        <option value="<?php echo $dataEvent['id_jadwal'] ?>"><?php echo $dataEvent["event"] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
      				    </div>
      				</div>
      				<div class="form-group">
      					<label class="control-label col-sm-4">Kategori :</label>
      				    <div class="col-sm-6">
      				        <input type="kelas" class="form-control" name="kelas" placeholder="Kelas">
      				    </div>
      				</div>
      				<div class="form-group">
      				    <label class="control-label col-sm-4">Harga :</label>
      				    <div class="col-sm-6">
      				        <input type="harga" class="form-control" name="harga" placeholder="Harga">
      				    </div>
      				</div>
      				<div class="form-group">
      				    <label class="control-label col-sm-4"></label>
      				    <div class="col-sm-6" align="right">
      				        <button class="btn btn-danger">Simpan</button>
      				    </div>
      				</div>
      			</form>
      		</div>
      		<div class="modal-footer">
        		
      		</div>
    	</div>
  	</div>
</div>


