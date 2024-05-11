<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form nilai</h1>
<form method="GET">
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text4" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="DDP">DDP</option>
        <option value="BD">Basis Data 1</option>
        <option value="PEMWEB">Pemweb</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai uts</label> 
    <div class="col-8">
      <input id="text1" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai uas</label> 
    <div class="col-8">
      <input id="text2" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai tugas/praktikum</label> 
    <div class="col-8">
      <input id="text3" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
error_reporting(0);
//$proses adalah variabel
//$_GET adalah methode request
//['proses'] adalah name atau penamaan setiap kolom input
$proses = $_GET['proses'];
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];


?>

Nama siswa <?= $nama?>
<br> MataKuliah : <?= $matkul ?>
<br> Nilai UTS : <?= $uts ?>
<br> Nilai UAS : <?= $uas ?>
<br> Nilai TUGAS : <?= $tugas ?>
