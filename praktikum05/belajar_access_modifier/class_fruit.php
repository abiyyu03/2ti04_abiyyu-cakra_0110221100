<?php
class Fruit{
    public $name; //can access from another class 
    protected $color; //can access only from thisclass and child class 
    private $weight; // can access only from this class
}

$manggo = new Fruit();
$mango->name = 'Mango'; //success
$mango->color = 'Yellow'; //error
$mango->weight = 300; //errorr