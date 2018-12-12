<br>
    <h3 class="page-header">
        <div align="center">Silahkan Pesan Tiket</div>
    </h3>
    <br><br><br>
    <form class="form-horizontal" action="proses_pesan.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-4">Nama Pemesan :</label>
            <div class="col-sm-6">
                <input class="form-control" name="nama" placeholder="Nama Pemesan" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">Alamat Pemesan :</label>
            <div class="col-sm-6">
                <textarea name="alamat" class="form-control" placeholder="Alamat Pemesan" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">Event :</label>
            <div class="col-sm-6">
                <select class="form-control" name="id_jadwal" id="event">
                    <option>--Pilih Event--</option>
                    <?php
                    $event = "SELECT * FROM jadwal";
                    $queryevent = mysqli_query($conn,$event);
                    while ($dataevent = mysqli_fetch_array($queryevent)) { ?>
                        <option value="<?php echo $dataevent['id_jadwal'] ?>"><?php echo $dataevent["event"] ?> | <?php echo $dataevent["jadwal"] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-sm-4" for="select">Kategori :</label>
            <div class="col-sm-6">
                <select class="form-control" id="kelas" name="id_event">
                    <option>--Pilih Kelas--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="select">Jumlah Tiket :</label>
            <div class="col-sm-6">
                <select class="form-control" id="penumpang" name="penumpang">
                    <option>--Pilih Jumlah Tiket--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">Total Harga Tiket :</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="total" name="total" readonly>
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
	
        <script type="text/javascript">
            $( "#event" ).change(function() {
              var id_jadwal = $("#event").val();
              console.log(id_jadwal);
              $.ajax({
                url: "./ajax_event.php?id_jadwal=" + id_jadwal,
                success: function(result){
                  $("#kelas").html(result);
                }
              });
            });

            $( "#penumpang" ).change(function() {
              var id_kelas = $("#kelas").val();
              var penumpang = $("#penumpang").val();
              console.log(penumpang);
              $.ajax({
                url: "./ajax_total.php?id_kelas=" + id_kelas + "&penumpang=" + penumpang,
                success: function(result){
                    console.log(result);
                  $("#total").val(result);
                }
              });
            });
        </script>
		
		
	