<?php
class Account
{
    protected $nomor,$saldo;
    function __construct($no,$saldo)
    {
        $this->nomor = $no;
        $this->saldo = $saldo;
    }

    function deposit($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    function withdraw($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }

    function cetak()
    {
        echo '<h3>Nomor Rekening : '.$this->nomor.'</h3>';
        echo '<h3>Saldo : '.$this->saldo.'</h3>';
    }
}