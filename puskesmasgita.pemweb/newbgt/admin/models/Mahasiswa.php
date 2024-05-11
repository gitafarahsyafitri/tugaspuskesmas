<?php
class Mahasiswa {
 private $koneksi;
 public function __construct(){
    global $dbh; //instance object koneksi.php
    $this->koneksi = $dbh;
}   
 public function dataMahasiswa(){
    $sql = "SELECT * FROM mahasiswa ";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}


}

?>