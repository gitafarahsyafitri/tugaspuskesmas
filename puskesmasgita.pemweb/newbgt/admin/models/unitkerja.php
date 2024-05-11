<?php
class Unitkerja {
 private $koneksi;
 public function __construct(){
    global $dbh; //instance object koneksi.php
    $this->koneksi = $dbh;
}   
 public function dataUnitkerja(){
    $sql = "SELECT * FROM unit_kerja ";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
public function simpan($data){
    $sql = "INSERT INTO unit_kerja(nama) VALUES (?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
}
public function getUnitkerja($id){
    $sql = "SELECT * FROM unit_kerja WHERE id = ?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();
    return $rs;
}
public function edit($data){
    $sql = "UPDATE unit_kerja SET nama=? WHERE id=?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
}
public function hapus($id){
    $sql = "DELETE FROM unit_kerja WHERE id=?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
}


}

?>