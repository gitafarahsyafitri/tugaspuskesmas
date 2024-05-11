<?php
error_reporting(0);
$obj_paramedik = new Paramedik();
$data_paramedik = $obj_paramedik->dataParamedik();
$idedit = $_REQUEST['idedit'];
$kl = !empty($idedit) ? $obj_paramedik->getParamedik($idedit) : array();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <h4 class="mt-3 text-center">Masukkan Data Paramedik</h4>
    <div class="row">
        <div class="col">

            <form method="POST" class="mt-5" action="paramedik_controller.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="" name="nama" type="text" class="form-control" value="<?= $kl['nama'] ?>" placeholder="Masukkan Nama Dokter">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Gender</label>
                    <div class="col-8">
                        <input id="text1" name="gender" placeholder="Masukkan Jenis Kelamin" type="text" class="form-control" value="<?= $kl['gender'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control" value="<?= $kl['tmp_lahir'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                        <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" type="date" class="form-control" value="<?= $kl['tgl_lahir'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-4 col-form-label">Kategori</label>
                    <div class="col-8">
                        <select name="kategori" class="form-control" id="kategori">
                            <option value="" hidden>Pilih Kategori</option>
                            <?php
                            try {
                                $sql = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS 
                                                                 WHERE TABLE_SCHEMA = 'dbpuskesmas' 
                                                                 AND TABLE_NAME = 'paramedik' 
                                                                 AND COLUMN_NAME = 'kategori'";
                                $stmt = $dbh->prepare($sql);
                                $stmt->execute();
                                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                                if ($result) {
                                    $type = $result['COLUMN_TYPE'];
                                    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
                                    $enums = explode("','", $matches[1]);

                                    foreach ($enums as $enum) {
                                        $selected = ($enum == $data['kategori']) ? 'selected' : '';
                                        echo "<option value='$enum' $selected>$enum</option>";
                                    }
                                }
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telpon" class="col-4 col-form-label">No Telepon</label>
                    <div class="col-8">
                        <input id="telpon" name="telpon" type="text" class="form-control" value="<?= $kl['telpon'] ?>" placeholder="Masukkan No Telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <input id="alamat" name="alamat" type="text" class="form-control" value="<?= $kl['alamat'] ?>" placeholder="Masukkan Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text5" class="col-4 col-form-label">Unit Kerja</label>
                    <div class="col-8">
                        <?php
                        $sqlunitkerja = "SELECT * FROM unit_kerja";
                        $unitkerja = $dbh->query($sqlunitkerja);
                        ?>
                        <select class="form-control" id="unit_kerja_id" name="unit_kerja_id">
                            <?php
                            foreach ($unitkerja as $rowunitkerja) {
                            ?>
                                <option value="<?= $rowunitkerja['id'] ?>" <?= $pr['unit_kerja_id'] == $rowunitkerja['id'] ? 'selected' : '' ?>><?= $rowunitkerja['nama'] ?></option>
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
                            <input type="hidden" name="id" value="<?= $idedit ?>">
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