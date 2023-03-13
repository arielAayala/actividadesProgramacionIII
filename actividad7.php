<!-- N° 7 - Variables String
Definir tres variables enteras. Luego definir un string (mensaje) que incorpore dichas variables y las sustituya en tiempo de ejecución. -->

<div>
    <h3>N° 7</h3>
    <h5>Definir tres variables enteras. Luego definir un string (mensaje) que incorpore dichas variables y las sustituya en tiempo de ejecución.<br></h5>
    <h5 class = "text-center">
    <?php
        $var1 = 1;
        $var2 = 2;
        $var3 = 3;
        $varString = "Primer Entero: $var1 <br>
        Segundo Entero: $var2 <br>
        Tercer Entero: $var3";
        echo $varString
    ?>
    </h5>
</div>