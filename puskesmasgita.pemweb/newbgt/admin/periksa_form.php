<?php
error_reporting(0);
$obj_periksa = new Periksa();
$data_periksa = $obj_periksa->dataPeriksa();
$idedit = $_REQUEST['idedit'];
$kl = !empty($idedit) ? $obj_periksa->getPeriksa($idedit) : array();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <h4 class="mt-3 text-center">Masukkan Data Periksa</h4>
    <div class="row">
        <div class="col">

            <form method="POST" class="mt-5" action="periksa_controller.php">
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                    <input type="hidden" name="idedit" value="<?= $kl['id'] ?>">
                    <div class="col-8">
                        <input id="tanggal" name="tanggal" type="date" class="form-control"  value="<?= $kl['tanggal'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                        <input id="berat" name="berat" type="number" class="form-control" placeholder="Masukan Berat Badan" value="<?= $kl['berat'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                        <input id="tinggi" name="tinggi" type="number" class="form-control" placeholder="Masukan Tinggi Badan" value="<?= $kl['tinggi'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tensi" class="col-4 col-form-label">Tensi</label>
                    <div class="col-8">
                        <input id="tensi" name="tensi" type="text" class="form-control" placeholder="Masukan Tensi Badan" value="<?= $kl['tensi'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                    <div class="col-8">
                        <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="Masukan Keterangan" value="<?= $kl['keterangan'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text5" class="col-4 col-form-label">Pasien ID</label>
                    <div class="col-8">
                        <?php
                        $sqlpasien = "SELECT * FROM pasien";
                        $pasien = $dbh->query($sqlpasien);
                        ?>
                        <select class="form-control" id="pasien_id" name="pasien_id">
                            <?php
                            foreach ($pasien as $rowpasien) {
                            ?>
                                <option value="<?= $rowpasien['id'] ?>" <?= $kl['pasien_id'] == $rowpasien['id'] ? 'selected' : '' ?>><?= $rowpasien['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text6" class="col-4 col-form-label">Dokter ID</label>
                    <div class="col-8">
                        <?php
                        $sqldokter = "SELECT * FROM paramedik";
                        $sqldokter = $dbh->query($sqldokter);
                        ?>
                        <select class="form-control" id="dokter_id" name="dokter_id">
                            <?php
                            foreach ($sqldokter as $rowdokter) {
                            ?>
                                <option value="<?= $rowdokter['id'] ?>" <?= $kl['dokter_id'] == $rowdokter['id'] ? 'selected' : '' ?>><?= $rowdokter['nama'] ?></option>
                            <?php
                            }
                            ?>
                    </div>
                </div>
                <input type="hidden">
                
                <div class="form-group row mt-4">
                    <div class="offset col-8">
                        <?php
                        if (empty($idedit)) {
                        ?>
                            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                        <?php

                        } else {
                        ?>
                            <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
                            <input type="hidden" name="id" value="<?= $idedit ?>">
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="mt-5">
<?php
//memanggil file bagian bawah
include_once 'bottom.php';

?>
</footer>