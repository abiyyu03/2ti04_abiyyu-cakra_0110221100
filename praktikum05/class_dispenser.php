<?php

class Dispenser 
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function isi($vol)
    {
        $this->volume = $vol;
    }
}

