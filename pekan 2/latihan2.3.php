<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">From Nilai</h1>
<form method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="DDP">DDP</option>
        <option value="BD">Basis Data 1</option>
        <option value="PEMWEB">Pemweb</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text1" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="text3" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$grade = $predikat = $hasil = "";
if(isset($_POST['proses'])){
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    //hitung nilai kelulusan 30% uts 35% uas 35% tugas, 55 ==lulus
    $nilai_akhir = 0.3 * $uts + 0.35 * $uas + 0.35 * $tugas;
    if($nilai_akhir >= 55 ){
        $hasil = "Lulus";
    } else {
        $hasil = "Tidak Lulus";
    }
    if ($nilai_akhir < 0 || $nilai_akhir > 100 ){
        $grade = "I";
    } else if ($nilai_akhir >= 85){
        $grade = "A";
    } else if ($nilai_akhir >= 70){
        $grade = "B";
    } else if ($nilai_akhir >= 56){
        $grade = "C";
    } else if ($nilai_akhir >+ 36){
        $grade = "D";
    } else {
        $grade = "E";
    }
    switch($grade){
        case "A" : $predikat = "Sangat Sempurna"; break;
        case "B" : $predikat = "Sempurna"; break;
        case "C" : $predikat = "Cukup"; break;
        case "D" : $predikat = "Kurang"; break;
        case "E" : $predikat = "Sangat Kurang"; break;
    }
    echo "Nama Anda : " .$_POST['nama']. "<br>";
    echo "Mata Kuliah : " .$_POST['matkul']. "<br>";
    echo "UTS : " .$_POST['uts']. "<br>";
    echo "UAS : " .$_POST['uas']. "<br>";
    echo "Tugas : " .$_POST['tugas']. "<br>";
    echo "Grade : " .$grade. "<br>";
    echo "Predikat :" .$predikat. "<br>";
    echo "Hasil : " .$hasil. "<br>";
    echo "Nilai Akhir : " .$nilai_akhir;
}