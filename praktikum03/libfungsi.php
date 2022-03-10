<?php
function data_diri($nama)
{
    return $nama;
}

function kelulusan($nilai)
{
    if($nilai > 55){
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }
}

function grade($nilai)
{
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
function predikat()
{
    global $nilai;
    $grade = grade($nilai);

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