<?php
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai = ($nilai_uts+$nilai_uas+$nilai_tugas)/3;

function grade()
{
    //scope
    global $nilai_uts, $nilai_uas, $nilai_tugas, $nilai;

    if ($nilai < 36 && $nilai >= 0) {
        $grade = 'E';
        return $grade;
    } elseif($nilai >= 36 && $nilai <= 55){
        $grade = 'D';
        return $grade;
    }  elseif($nilai >= 56 && $nilai <= 69) {
        $grade = 'C';
        return $grade;
    } elseif ($nilai >= 70 && $nilai <= 84) {
        $grade = 'B';
        return $grade;
    } elseif ($nilai >= 85 && $nilai <= 100) {
        $grade = 'A';
        return $grade;
    } else {
        $grade = 'I';
        return $grade;
    }
}
function status() 
{
    //scope
    global $nilai_uts, $nilai_uas, $nilai_tugas,$nilai;

    if($nilai > 55){
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }

}
function predikat() {
    global $nilai_uts, $nilai_uas, $nilai_tugas,$nilai;
    $grade = grade();

    switch ($grade) {
        case 'E':
            return 'Sangat Kurang';
            break;
        case 'D':
            return 'Kurang';
            break;
        
        case 'C':
            return 'Cukup';
            break;
        case 'B':
            return 'Memuaskan';
            break;
        case 'A':
            return 'Sangat Memuaskan';
            break;
        
        default:
            return 'Tidak Ada';
            break;
    }
}
//check if button is pressed
if (isset($_POST['submit'])) {
    grade();
    status();
    predikat();
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
<p>Grade : <?= grade(); ?></p>
<p>Status : <?= status(); ?></p>
<p>Predikat : <?= predikat(); ?></p>