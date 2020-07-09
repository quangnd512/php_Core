<?php
class Caculator
{
    public function Sum($a, $b){
        $c = $a + $b;
        return $c;
    }
}

$calc = new Caculator;
echo $calc->Sum(4,5);