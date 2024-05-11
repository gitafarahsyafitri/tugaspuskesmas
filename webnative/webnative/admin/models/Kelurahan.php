<?php
class Kelurahan {
 private $koneksi;
 public function __construct(){
    global $dbh; //instance object koneksi.php
    $this->koneksi = $dbh;
}   
 public function dataKelurahan(){
    $sql = "SELECT * FROM kelurahan";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
public function simpan($data){
    $sql = "INSERT INTO kelurahan(nama, kec_id) VALUES (?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
}

}

?>