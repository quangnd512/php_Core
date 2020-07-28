<?php
// Bước 1: Triệu gọi file database
include_once("database.php");

// Bước 2: Tiến hành truy vấn sql
$sql = " SELECT * FROM `students` "; //Truy vấn dữ liệu
$query = mysqli_query($conn, $sql); //Thực thi câu truy vấn

// Bước 3: Đếm số kết quả trả về
    // $total = mysqli_num_rows($query);
    // echo $total;

// Bước 4: Trả dữ liệu về dưới dạng mảng
    //$row = mysqli_fetch_array($query);

// Bước 5: In dữ liệu mảng ra màn hình
    while ($row = mysqli_fetch_array($query)) {
        echo $row["fullname"]."\t";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


