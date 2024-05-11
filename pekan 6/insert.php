<?php

include 'koneksi.php';    

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];

$query = "INSERT INTO mahasiswa (nama, nim, jurusan, semester)
            VALUES ('$nama', '$nim', '$jurusan', '$semester')";

if( $conn->query($query) === TRUE ) {
    header("Location: index.php");
}


$conn->close();