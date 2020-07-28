<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/php_Core/Core/example2.php?ten=Nguyen Van A&tuoi=25&diachi=Ha Noi">Nguyen Van A</a>
    <br/>
    <h2>
        <?php
            if (isset($_GET['ten'])&&isset($_GET['tuoi'])&&isset($_GET['diachi'])) {
                echo "Ten: ".$_GET['ten'].", tuoi: ".$_GET['tuoi'].", dia chi: ".$_GET['diachi']; 
            } 
        ?>
    </h2>
</body>
</html>