<?php

$a = "12,4";
$b = "13,5";

$c = str_replace( ",", ".", $a);
$d = str_replace( ",", ".", $b);

$sum = $c+$d;
echo $sum;