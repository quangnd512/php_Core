<?php

// Ket noi toi co so du lieu
$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "quanlysinhvien";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($conn) {
    mysqli_query($conn, "'SET NAMES utf8'");
} else {
    echo "Ket noi that bai".mysqli_connect_error();
}

$sql = "SELECT *FROM students";
$query = mysqli_query($conn,$sql);

//Luu co so du lieu vao chuoi
$text = '<?xml version="1.0" encoding="UTF-8"?>
<sinhvien>';
    while ($row = mysqli_fetch_array($query)) {
        $text .= '<thongtin>';
        $text .= '<fullname>'.$row['fullname'].'</fullname>';
        $text .= '<gender>'.$row['gender'].'</gender>';
        $text .= '<address>'.$row['address'].'</address>';
        $text .= '</thongtin>';
    }
$text .= '</sinhvien>';

//Ghi ra file xml
$fp = 'test2.xml';
$fo = fopen($fp,"w+");
$fw = fwrite($fo,$text);
$fc = fclose($fo);