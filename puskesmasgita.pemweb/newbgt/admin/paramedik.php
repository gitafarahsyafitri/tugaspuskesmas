<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Paramedik();
$data_paramedik = $model->dataParamedik();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }


?>
<div class="card mb-4 mt-3">
    <div class="card-header d-flex justify-content-between">
        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
        <!-- membuat tombol mengarahkan ke file produk_form.php -->
<h4>Data Kelola Paramedik</h4>
        <a href="index.php?url=paramedik_form" class="btn btn-primary btn"> Tambah</a>

    </div>

    <div class="card-body">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Kategori</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Unit Kerja</th>
                    <th>Action</th>
                </tr>
            </thead>
          
            <tbody>
                <!-- hapus dari baris 64 sampai 511 -->
                <!-- dari <tr> ke </tr> -->
                <?php
                $no = 1;
                foreach ($data_paramedik as $row) {

                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['tmp_lahir'] ?></td>
                        <td><?= $row['tgl_lahir'] ?></td>
                        <td><?= $row['kategori'] ?></td>
                        <td><?= $row['telpon'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['unit_kerja_id'] ?></td>
                        <td>
                            <form action="paramedik_controller.php" method="POST">
                                <a href="index.php?url=paramedik_form&idedit=<?= $row['id'] ?>" class="btn btn-primary btn-sm" name="proses">Edit</a>

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