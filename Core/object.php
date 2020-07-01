<?php
class Mobile
{
    public $model;
    function Test1($model)
    {
        echo $model."</br>";
    }

    function __destruct()
    {
        echo "Da vao Destruct";
    }

}

$A = new Mobile;
$A->Test1("Day la test");

?>
