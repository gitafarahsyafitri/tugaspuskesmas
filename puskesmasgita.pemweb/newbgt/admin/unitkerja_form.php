<?php
error_reporting(0);
$obj_unitkerja = new Unitkerja();
$data_unitkerja = $obj_unitkerja->dataUnitkerja();
$idedit = $_REQUEST['idedit'];
$kl = !empty($idedit) ? $obj_unitkerja->getUnitkerja($idedit) : array() ;

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <h4 class="mt-3 text-center">Masukkan Data Unit Kerja</h4>
  <form method="POST" class="mt-5" action="unitkerja_controller.php">
    <div class="form-group row">
      <label for="text" class="col-4 col-form-label">Nama</label> 
      <div class="col-8">
        <input id="text" name="nama" type="text" class="form-control" value="<?= $kl['nama']?>">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <?php 
        if(empty($idedit)){
        ?>
        <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        <?php
  
        } else {
        ?>
        <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
        <input type="hidden" name="idx" value="<?= $idedit ?>">
        <?php } ?>
      </div>
    </div>
  </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
//memanggil file bagian bawah
include_once 'bottom.php';

?>