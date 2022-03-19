<?php 
class Mahasiswa 
{
    public $ipk, $nama, $nim, $prodi, $thn_angkatan, $predikat_ipk;
    function __construct($nama,$nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;  
    }

    function predikat_ipk()
    {
        if($this->ipk < 2.0) 
        {
            return 'Cukup';
        }elseif($this->ipk >= 2.0 && $this->ipk < 3.0) 
        {
            return 'Baik';
        }elseif($this->ipk >= 3.0 && $this->ipk < 3.75) 
        {
            return 'Memuaskan';
        } elseif($this->ipk >= 3.75 && $this->ipk <= 4) {
            return 'Cum Laude';
        }
    }
}