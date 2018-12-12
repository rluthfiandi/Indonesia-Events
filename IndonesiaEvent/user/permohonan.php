<br>
    <h3 class="page-header">
        <div align="center">Permohonan Event</div>
    </h3>
    <br><br><br>
    <form class="form-horizontal" action="config/mohon.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-4">Nama Event :</label>
            <div class="col-sm-6">
                <input class="form-control" name="namaevent" placeholder="Nama Event" required>
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
                <input class="form-control" name="lokasievent" placeholder="Lokasi Event" required>
            </div>
        </div>
       
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <div class="row">
		<input type="submit" value="Submit"><br>
	</div>
            </div>
        </div>
    </form>