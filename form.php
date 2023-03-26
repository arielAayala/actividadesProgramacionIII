<?php
    echo "Nombre: ".$_REQUEST["nombre"];
    if ($_REQUEST["edad"] < 18 ){
        echo "<br> Menor de edad";
    }else{
        echo "<br> Mayor de edad";
    }
    echo "<br>Edad: ".$_REQUEST["edad"]
?>