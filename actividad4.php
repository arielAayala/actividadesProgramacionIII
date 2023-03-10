<?php
    /*N°4
    Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros: $num=rand(1,100); 
    En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100. 
    Hacer un programa que muestre por pantalla el valor generado. Mostrar además si es menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable también utilizamos el comando echo: echo $num; 
     */

    $num = rand(1,100);
    if($num <= 50){
        $alert = ["El numero $num es menor a 50", "text-info"] ;
    }else{
        $alert = ["El numero $num es mayor a 50", "text-danger"] ;
    }
    echo 
    "<div class='ms-5 me-5 mt-5'> 
        <h3><b>N° 4</b></h3>
        <h5>Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros: num=rand(1,100); 
        En la variable num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100. 
        Hacer un programa que muestre por pantalla el valor generado. Mostrar además si es menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable también utilizamos el comando echo: echo num;</h5>
        <h5 class='$alert[1] text-center'> $alert[0]</h5>
    </div>"; 
?>