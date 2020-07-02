<?php
class Cha
{
    public $tong;
    public $c = 5;
    function Tong($a, $b)
    {
        $this->tong = $a+$b;
        echo "Tong: $this->tong";
    }

}
class Con extends Cha
{
    function NhanDoi(){
        echo "Gia tri phep nhan doi: ".$this->tong*2;
    }
}
class Chau extends Cha
{
    function NhanBa(){
        echo "Gia tri phep nhan ba: ".$this->tong*3;
    }
}
class HT extends Cha
{
    function HT1(){
        echo "Class HT";
    }
}
$cha1 = new Cha;
$cha1->Tong(2,5);
$con1 = new Con;
$con1->Tong(5,7);
$chau1 = new Chau;
$chau1->Tong(10,4);
$h1 = new HT;
$h1->Tong(5,5);
?>