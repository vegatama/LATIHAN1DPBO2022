<?php

include "tugasb.php";

$data = new Timbola();
$data->setNama("Meikarta FC");
$data->setNegaraAsal("Indonesia");
$data->setTahunBerdiri("2020");
$data->setPemain(array("Bambang Riza", "Andi Riza", "Aldo Riza", "Didi Riza", "Doni Riza"));

echo "NAMA : ".$data->getNama() ."<br>";
echo "NegaraAsal : ".$data->getNegaraAsal() ."<br>";
echo "TahunBerdiri : ".$data->getTahunBerdiri() ."<br>";

for ($x = 1; $x <= 5; $x++) {
    echo "Pemain ".$x.": ".$data->getPemain($x-1)."<br>";
  }
?>