<?php
require_once 'libfungsi.php';
$nilai = 90;

$nama = data_diri('Abiyyu Cakra');
$grade = grade($nilai);
$kelulusan = kelulusan($nilai);
$predikat = predikat();
?>
<p>Nama : <?= $nama ?></p>
<p>Grade : <?= $grade; ?></p>
<p>Status : <?= $kelulusan; ?></p>
<p>Predikat : <?= $predikat; ?></p>