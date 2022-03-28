<?php
require_once 'class_dispenser.php';

class Sirup extends Dispenser 
{
    protected $dompet;
    function __construct($namaMinuman,$volumeGelas,$harga){
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $harga;
        $this->volumeGelas = $volumeGelas;
    }

    function bayar($duit)
    {
        $this->dompet = $duit;
        return $this->dompet = $this->dompet - $this->hargaSegelas;
    }

    function volumeSetelahDijual()
    {
        return $this->volume = $this->volume - $this->volumeGelas;
    }

    function cetak()
    {
        echo 'Kamu beli Sirup '.$this->namaMinuman.' yang harganya '.$this->hargaSegelas."<br>";
        echo 'Volume asli dispenser sirup adalah '.$this->volume."<br>";
        echo 'Volume Dispenser setelah dibeli : '.$this->volumeSetelahDijual()."<br>";
        echo 'Sisa uang mu adalah : '.$this->bayar(2000);
    }
}

$sirup = new Sirup('Mardjan',250,500);
$sirup->bayar(2000);
$sirup->isi(1000);
$sirup->cetak();