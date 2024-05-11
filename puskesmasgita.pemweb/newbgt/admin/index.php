<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Anda harus login terlebih dahulu') </script>";
    echo "<script>window.location.href='login.html'</script>";
}

//memanggil dan memproses file bagian atas
include_once 'koneksi.php';
include_once 'models/Mahasiswa.php';
include_once 'models/unitkerja.php';
include_once 'models/kelurahan.php';
include_once 'models/pasien.php';
include_once 'models/periksa.php';
include_once 'models/paramedik.php';
include_once 'models/login.php';

include_once 'top.php';
//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <?php
            //algoritma menangkap url agar masuk kedalam index
            $url = $_GET['url'];
            if ($url == 'dashboard') {
                include_once 'dashboard.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                'dashboard.php';
            }
            ?>
        </div>
    </main>
</div>
<?php
//memanggil file bagian bawah
include_once 'bottom.php';

?>