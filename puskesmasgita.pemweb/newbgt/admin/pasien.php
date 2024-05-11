<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Pasien();
$data_pasien = $model->dataPasien();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>
<div class="card mb-4 mt-3">
    <div class="card-header d-flex justify-content-between">
        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
        <!-- membuat tombol mengarahkan ke file produk_form.php -->
        <h4>Data Kelola Pasien</h4>
        <a href="index.php?url=pasien_form" class="btn btn-primary btn"> Tambah</a>

    </div>

    <div class="card-body table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT pasien.*, kelurahan.nama AS kelurahan FROM pasien INNER JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id";
                $stmt = $dbh->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                foreach ($data_pasien as $row) {

                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['kode'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tmp_lahir'] ?>. <?= date('d F Y', strtotime($row['tgl_lahir'])); ?></td>
                        <td>
                            <?php
                            if ($row['gender'] == 0) {
                                echo "Perempuan";
                            } else {
                                echo "Laki-laki";
                            }
                            ?>
                        </td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['kelurahan_id'] ?></td>

                        <td>
                            <!-- membuat action edit, show, dan delete -->

                            <form action="pasien_controller.php" method="POST">
                                <a href="index.php?url=pasien_form&idedit=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>
                                <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                            </form>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
</div>

<?php

// include_once 'bottom.php';
?>