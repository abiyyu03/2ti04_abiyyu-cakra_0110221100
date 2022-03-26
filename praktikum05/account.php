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
        echo '<h2>Nomor Rekening : '.$this->nomor.'</h2>';
        echo '<h2>Saldo : '.$this->saldo.'</h2>';
    }
}
$ac1 = new Account_bank('C001',300,'Ahmad');
$ac1->deposit(10);
$ac1->cetak();