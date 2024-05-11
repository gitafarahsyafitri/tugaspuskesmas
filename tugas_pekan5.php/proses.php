<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan Makeup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        .data {
            margin-top: 30px;
        }
        .data label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Penjualan Makeup</h2>
        <?php
        // Mengecek apakah data dikirim melalui metode POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo "<p>Tidak ada data yang dikirim.</p>";
            exit;
        }
        
        // Mengambil nilai dari formulir
        $jenis = $_POST['jenis'];
        $merk = $_POST['merk'];
        $harga = $_POST['harga'];
        $nama = $_POST['nama'];
        $nomer = $_POST['nomer'];

        // Validasi formulir untuk memastikan semua kolom diisi
        if(empty($jenis) || empty($merk) || empty($harga) || empty($nama) || empty($nomer)) {
            echo "<p>Semua kolom harus diisi.</p>";
        } else {
            ?>
            <div class="data">
                <label>Jenis:</label>
                <span><?php echo $jenis; ?></span><br>
                <label>Merk:</label>
                <span><?php echo $merk; ?></span><br>
                <label>Harga:</label>
                <span><?php echo $harga; ?></span><br>
                <label>Nama Penjual:</label>
                <span><?php echo $nama; ?></span><br>
                <label>Nomer Penjual:</label>
                <span><?php echo $nomer; ?></span><br>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
