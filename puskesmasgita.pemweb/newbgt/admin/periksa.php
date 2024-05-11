<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Periksa();
$data_periksa = $model->dataPeriksa();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>
<div class="card mb-4 mt-3">
    <div class="card-header d-flex justify-content-between">
        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
        <!-- membuat tombol mengarahkan ke file produk_form.php -->
<h4>Data Kelola Periksa</h4>
        <a href="index.php?url=periksa_form" class="btn btn-primary btn"> Tambah</a>

    </div>

    <div class="card-body table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Berat</th>
                    <th>Tinggi</th>
                    <th>Tensi</th>
                    <th>Keterangan</th>
                    <th>Pasien</th>
                    <th>Paramedik</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- hapus dari baris 64 sampai 511 -->
                <!-- dari <tr> ke </tr> -->
                <?php
                $no = 1;
                foreach ($data_periksa as $row) {

                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['berat'] ?></td>
                        <td><?= $row['tinggi'] ?></td>
                        <td><?= $row['tensi'] ?></td>
                        <td><?= $row['keterangan'] ?></td>
                        <td><?= $row['pasien_id'] ?></td>
                        <td><?= $row['dokter_id'] ?></td>
                        <td>
                            <form action="periksa_controller.php" method="POST">
                                <a href="index.php?url=periksa_form&idedit=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>

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