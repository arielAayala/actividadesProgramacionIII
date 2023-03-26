<?php
echo "Nombre: ".$_REQUEST["nombre"]."<br>";
if ($_REQUEST["ingreso"] == "pagar"){
    echo "debes pagar impuestos";
}else{
    echo "no debes pagar impuestos";
}

?>