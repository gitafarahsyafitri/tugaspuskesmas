<?php

class manusia {
    public $nama;
    public $umur;

    public function setNama($name) {
        $this->nama = $name;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }
      
    public function getInfo() {
        return "Nama : " . $this->nama . ", Umur:" . $this->umur;
    }
}


// membuat objek
$ahmad = new Manusia();
$ahmad->setNama("Ahmad");
$ahmad->setUmur(25);

$gita = new Manusia();
$gita->setNama("gita");
$gita->setUmur(20);





echo $ahmad->getInfo();

echo "<br>";

echo $gita->getInfo();
