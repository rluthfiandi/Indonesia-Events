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
		<h2><p><center>Manajemen Jadwal</center></p></h2>
		<hr>
    <br>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Tambah</button>
		<br><br>
		<form class="form-horizontal">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Event</th>
						<th>Jadwal</th>
						<th>Lokasi</th>
						<th colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php

						include '../config/koneksi.php';

						$query = mysqli_query($conn, "SELECT id_jadwal, event, jadwal, lokasi FROM jadwal")or die(mysqli_error());
										if(mysqli_num_rows($query) == 0){	
											echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';		
										}
											else
										{	
											$no = 1;				
											while($data = mysqli_fetch_array($query)){	
						 						echo '<tr>';
												echo '<td>'.$no.'</td>';
												echo '<td>'.$data['event'].'</td>';
												echo '<td>'.$data['jadwal'].'</td>';
												echo '<td>'.$data['lokasi'].'</td>';
												echo '<td><a href=admin.php?halaman=edit_jadwal&&id_jadwal='.$data['id_jadwal'].'><span class="glyphicon glyphicon-edit"></a></td>';
												echo '<td><a href=../config/delete_jadwal.php?id_jadwal='.$data['id_jadwal'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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

<!-- Modal Tambah Data Keberangkatan -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content -->
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambahkan Jadwal</h4>
          </div>
          <div class="modal-body">
            <form action="../config/add_jadwal.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-4">Event :</label>
                  <div class="col-sm-6">
                      <input type="event" class="form-control" name="event" placeholder="Event">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4">Jadwal :</label>
                  <div class="col-sm-6">
                     <input type="date" name="jadwal" class="form-control input-md" required/>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4">Lokasi :</label>
                <div class="col-sm-6">
                  <input type="lokasi" class="form-control" name="lokasi" placeholder="Lokasi">
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