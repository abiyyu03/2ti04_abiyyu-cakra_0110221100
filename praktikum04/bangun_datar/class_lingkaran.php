<?php
class Lingkaran
{
    private $jari;
    const PHI = 3.14;
    
    //define construct method
    function __construct($r)
    {
        $this->jari = $r;
    }
    
    function getLuas()
    {
        return SELF::PHI * $this->jari * $this->jari;
    }
    function getKeliling()
    {
        return 2 * SELF::PHI * $this->jari;
    }
}