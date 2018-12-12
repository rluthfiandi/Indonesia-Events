<?php

include '../config/koneksi.php';

$id_event  = $_GET['id_event'];

$edit    = "SELECT id_event, kelas, harga FROM event WHERE id_event = '$id_event'";
$hasil   = mysqli_query($conn, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10">
    <h3>
        <div align="center">Edit Event</div>
    </h3>
    <br><br><br>
    <form class="form-horizontal" action="../config/update_event.php" method="POST">
        <input type="hidden" name="id_event" value="<?php echo $id_event ?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="kelas">Kelas :</label>
            <div class="col-sm-6">
                <input type="kelas" class="form-control" name="kelas" value="<?php echo $data['kelas']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="harga">Harga :</label>
            <div class="col-sm-6">
                <input type="harga" class="form-control" name="harga" value="<?php echo $data['harga']; ?>">
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