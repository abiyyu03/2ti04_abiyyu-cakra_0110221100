<?php
require_once 'account.php';
class Account_bank extends Account
{
    protected $customer;
    function __construct($no,$saldo,$customer)
    {
        parent::__construct($no,$saldo);
        $this->customer = $customer;
    }

    function transfer($uang)
    {
        // $account = new Account();
        $account->deposit($uang);
        $this->withdraw($uang);
    }
    function cetak()
    {
        echo '<h2>Nama : '.$this->customer.'</h2>';
        parent::cetak();
    }
}
// $obj = new Account_bank('C001',6000000,'Ahmad');
// $obj->deposit(1000000);
// $obj->cetak();

$obj1 = new Account_bank('C001',6000000,'Ahmad');
$obj1->transfer(1000000);
$obj1->cetak();
