<?php

require_once 'class_persegi_panjang.php';

$persegipanjang1 = new Persegi_panjang(10,4);
$persegipanjang2 = new Persegi_panjang(4,12);

echo "Nilai Panjang 1 : " . $persegipanjang1->getPanjang();
echo "<br>Nilai Lebar 1: " . $persegipanjang1->getLebar();
echo "<br>Nilai Panjang 2 : " . $persegipanjang2->getPanjang();
echo "<br>Nilai Lebar 2: " . $persegipanjang2->getLebar();

echo "<br><br>Luas Persegi Panjang I : ".$persegipanjang1->getLuas();
echo "<br>Luas Persegi Panjang II : ".$persegipanjang2->getLuas();
echo "<br>Keliling Persegi Panjang I : ".$persegipanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II : ".$persegipanjang2->getKeliling();