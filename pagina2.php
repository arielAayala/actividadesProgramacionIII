<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con =mysqli_connect("localhost","root","","comercio") or die("error en la conexion");
        
        mysqli_query($con,"insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or die(mysqli_error($con));

        mysqli_close($con);
    ?>
</body>
</html>