<?php

$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

include 'Mahasiswa.php';

$mahasiswa = new Mahasiswa($nama, $nilai);
$hasil = $mahasiswa->hasilLulus();
$predikat = $mahasiswa->predikat();

echo $nama;
echo $nilai;
echo $hasil;
echo $predikat;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Hasil</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td> <?= $nama ?> </td>
                <td> <?= $nilai ?> </td>
                <td> <?= $hasil ?> </td>
                <td> <?= $predikat ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>