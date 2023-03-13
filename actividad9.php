<div class= "mt-5">
    <h3>N° 9</h3>
    <h5>Generar un valor aleatorio entre 1 y 100. Luego mostrar si tiene 1, 2 o 3 dígitos.
    Como podemos observar estamos en presencia de un problema que tiene tres caminos posibles. 
    El valor puede tener 1 dígito, 2 dígitos o 3 dígitos. Es decir, para que tenga un dígito debe estar comprendido entre 1 y 9, para que tenga dos dígitos deberá estar comprendido entre 10 y 99, y finalmente para tener 3 dígitos deberá ser el valor 100.<br></h5>
    <h5 class="text-center">
    <?php
        $random = rand(1,100);
        if ($random<=9)
        {
        echo "Tiene un dígito";
        }
        elseif ($random<100)
        {
        echo "Tiene 2 dígitos";
        }
        else
        {
        echo "Tiene 3 dígitos";
        }
    ?>
    </h5>
</div>