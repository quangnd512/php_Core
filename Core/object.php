<?php

$a = 10;
$c = 'welcome';

$str = '$c cac ban da den voi lop $a';
echo $str;

eval("\$str1 = \"$str\";");
echo $str1;

?>