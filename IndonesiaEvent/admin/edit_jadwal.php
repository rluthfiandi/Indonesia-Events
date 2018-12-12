<?php

include '../config/koneksi.php';

$id_jadwal  = $_GET['id_jadwal'];

$edit    = "SELECT id_jadwal, event, jadwal, lokasi FROM jadwal WHERE id_jadwal = '$id_jadwal'";
$hasil   = mysqli_query($conn, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10">
    <h3>
        <div align="center">Edit Info Jadwal</div>
    </h3>
    <br><br><br>
    <form class="form-horizontal" action="../config/update_jadwal.php" method="POST">
        <input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal ?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="event">event :</label>
            <div class="col-sm-6">
                <input type="event" class="form-control" name="event" value="<?php echo $data['event']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="jadwal">Jam :</label>
            <div class="col-sm-6">
                <input type="jadwal" class="form-control" name="jadwal" value="<?php echo $data['jadwal']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="lokasi">lokasi :</label>
            <div class="col-sm-6">
                <input type="lokasi" class="form-control" name="lokasi" value="<?php echo $data['lokasi']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>