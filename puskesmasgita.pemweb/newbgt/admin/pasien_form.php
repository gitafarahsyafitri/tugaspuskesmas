<?php
error_reporting(0);
$obj_pasien = new Pasien();
$data_pasien = $obj_pasien->dataPasien();
$idedit = $_REQUEST['idedit'];
$kl = !empty($idedit) ? $obj_pasien->getPasien($idedit) : array();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
  <h4 class="mt-3 text-center">Masukkan Data Pasien</h4>
  <div class="row">
    <div class="col-md-12">

      <form method="POST" class="mt-5" action="pasien_controller.php">
        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Kode</label>
          <input type="hidden" name="idedit" value="<?= $kl['id'] ?>">
          <div class="col-8">
            <input id="text" name="kode" type="text" class="form-control" value="<?= $kl['kode'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Nama</label>
          <div class="col-8">
            <input id="text1" name="nama" type="text" class="form-control" value="<?= $kl['nama'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Tempat Lahir</label>
          <div class="col-8">
            <input id="text1" name="tmp_lahir" type="text" class="form-control" value="<?= $kl['tmp_lahir'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Tanggal Lahir</label>
          <div class="col-8">
            <input id="text1" name="tgl_lahir" type="date" class="form-control" value="<?= $kl['tgl_lahir'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="gender" class="col-4 col-form-label">Gender Pasien</label><br>
          <div class="col-4">
            <input type="radio" id="genderPR" name="gender" <?= $kl['gender'] == 0 ? "checked" : "" ?> value="0">
            <label for="genderPR">Perempuan</label>
            <input type="radio" id="genderLK" name="gender" <?= $kl['gender'] == 1 ? "checked" : "" ?> value="1">
            <label for="genderLK">Laki-laki</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Email</label>
          <div class="col-8">
            <input id="text1" name="email" type="text" class="form-control" value="<?= $kl['email'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Alamat</label>
          <div class="col-8">
            <input id="text1" name="alamat" type="text" class="form-control" value="<?= $kl['alamat'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="text5" class="col-4 col-form-label">Kelurahan ID</label>
          <div class="col-8">
            <?php
            $sqlkelurahan = "SELECT * FROM kelurahan";
            $kelurahan = $dbh->query($sqlkelurahan);
            ?>
            <select class="form-control" id="kelurahan_id" name="kelurahan_id">
              <?php
              foreach ($kelurahan as $rowkelurahan) {
              ?>
                <option value="<?= $rowkelurahan['id'] ?>" <?= $pr['kelurahan_id'] == $rowkelurahan['id'] ? 'selected' : '' ?>><?= $rowkelurahan['nama'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
    
    
    
        <div class="form-group row">
          <div class="offset-4 col-8">
            <?php
            if (empty($idedit)) {
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
  </div>
</div>
<br>
<?php
//memanggil file bagian bawah
include_once 'bottom.php';

?>