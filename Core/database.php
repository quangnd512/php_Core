<?php
$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "quanlysinhvien"; //Ten cua database

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($conn) {
    mysqli_query($conn, "'SET NAMES utf8'");
} else {
    echo "Ket noi that bai".mysqli_connect_error();
}