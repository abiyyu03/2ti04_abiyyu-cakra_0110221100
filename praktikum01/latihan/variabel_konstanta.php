<?php
define('PHI','3.14');
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari2 = 14;
$keliling = 2 * PHI * $jari2;
$luas = PHI * $jari2 * $jari2;

echo 'luas lingkaran dengan Jari '.$jari2.' : '.$luas;
echo '<br>Kelilingnya : '.$keliling;
echo '<hr>';
echo 'Nama Databasenya : '.DBNAME;
echo '<br> Databasenya : '.DBSERVER;
