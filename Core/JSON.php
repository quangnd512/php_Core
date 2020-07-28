<?php
$str = '[
{"class":"A", "name":"NVA"},
{"class":"B", "name":"NVB"},
{"class":"C", "name":"NVC"}
]';
//Cú pháp JSON đơn giản

$arr = json_decode($str,true); //Đưa chuỗi json thành dạng mảng
echo $arr[0]['class']." ".$arr[0]['name']; //In mảng arr ra màn hình
