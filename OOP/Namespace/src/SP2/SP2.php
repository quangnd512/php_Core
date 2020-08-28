<?php
namespace QND\SP2;
use QND\SP3\SP3_QND\SP3 as SP3;

// NameSpace: QND
// SubNameSpaces: QND
// ClassName: SP2

class SP2 extends SP3
{
    function eatAnimal(){
        echo "Animal eat";
        $sp3 = new SP3;
        $sp3->soudAnimal();
    }
}