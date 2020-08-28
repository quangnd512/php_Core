<?php
namespace QND\SP1;

use  QND\SP2\SP2;

class SP1 extends SP2
{
    public function runAnimal(){
        echo "Animal run";
        $sp2 = new SP2;
        $sp2->eatAnimal();
    }
}