<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Kelurahan();
$data_kelurahan = $model->dataKelurahan();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>

                        <div class="card mt-3">
                            <div class="card-header d-flex justify-content-between">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                                <h4>Data Kelola Kelurahan</h4>
                                <a href="index.php?url=kelurahan_form" class="btn btn-primary btn-mr"> Tambah</a>
                               
                            </div>

                            <div class="card-body">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_kelurahan as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['kec_id']?></td>
                                            <td> 
                                                <!-- membuat action edit, show, dan delete -->
                                                
                                                <form action="kelurahan_controller.php" method="POST">
                                                <a href="index.php?url=kelurahan_form&idedit=<?= $row ['id']?>" class="btn btn-primary btn-sm">Edit</a>
                                               
                                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                                    onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>

                                                    <input type="hidden" name="idx" value="<?= $row['id']?>">
                                           

                                                   
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

