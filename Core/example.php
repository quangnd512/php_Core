<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Name <input type="text" onkeyup="ajaxFunction(this.value)">
    </form>
    <div>
    <h3>Ten vua nhap: <span id="course"></span></h3>
    </div>
    <script>
    function ajaxFunction(str) {
        var xmlHttp;
        if (window.XMLHttpRequest) {
            xmlHttp = new XMLHttpRequest();
        }else{
            xmlHttp = ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4) {
                document.getElementById("course").innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open('GET', 'ArrayAX.php?q='+str,true);
        xmlHttp.send(null);
    }
    </script>
</body>
</html>