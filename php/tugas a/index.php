<?php

include "tugasa.php";

$data = new Mahasiswa();
$data->setNIM("234100");
$data->setNama("Andi Hermawan");
$data->setJenisKelamin("Laki-laki");
$data->setProgramStudi("Ilmu Komputer");
$data->setSemester("7");

echo "NIM : ".$data->getNIM() ."<br>";
echo "NAMA : ".$data->getNama() ."<br>";
echo "JenisKelamin : ".$data->getJenisKelamin() ."<br>";
echo "ProgramStudi : ".$data->getProgramStudi() ."<br>";
echo "Semester : ".$data->getSemester() ."<br>";

?>