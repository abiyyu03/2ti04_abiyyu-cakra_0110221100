<?php
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

function nilai()
{
    //scope
    global $nilai_uts;
    global $nilai_uas;
    global $nilai_tugas;

    $nilai = ($nilai_uts+$nilai_uas+$nilai_tugas)/3;
    if ($nilai < 36 && $nilai >= 0) {
        return 'E';
    } elseif($nilai >= 36 && $nilai <= 55){
        return 'D';
    }  elseif($nilai >= 56 && $nilai <= 69) {
        return 'C';
    } elseif ($nilai >= 70 && $nilai <= 84) {
        return 'B';
    } elseif ($nilai >= 85 && $nilai <= 100) {
        return 'A';
    } else {
        return 'I';
    }
}
//check if button is pressed
if (isset($_POST['submit'])) {
    nilai();
}
// if(array_key_exists('submit',$_POST)) 
// {
//     nilai();
// }
 
?>
<p>Nama : <?= $nama ?></p>
<p>Matkul : <?= $matkul ?></p>
<p>Nilai UTS : <?= $nilai_uts ?></p>
<p>Nilai UAS : <?= $nilai_uas ?></p>
<p>Nilai Tugas/Praktikum : <?= $nilai_tugas ?></p>
<p>Grade : <?= nilai(); ?></p>