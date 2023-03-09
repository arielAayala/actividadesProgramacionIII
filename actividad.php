<?php
    /*  N° 2
    Confeccione un programa que muestre una serie de mensajes en la página empleando el comando echo. Tenga en cuenta que cuando utiliza el comando echo el mensaje se debe encerrar entre comillas dobles (como veremos más adelante también podrá encerrarse entre simples comillas).
    Toda instrucción finaliza con punto y coma.*/
    echo 
    "<div class='ms-5 me-5'> 
        <h1 class='text-center fs-1'> Desarrollo de actividades</h1>
        <br>
        <h3><b>N° 2</b></h3>
        <h5>Confeccione un programa que muestre una serie de mensajes en la página empleando el comando echo. Tenga en cuenta que cuando utiliza el comando echo el mensaje se debe encerrar entre comillas dobles (como veremos más adelante también podrá encerrarse entre simples comillas).Toda instrucción finaliza con punto y coma.</h5>
    </div>";


    /*N° 3
    Mostrar un cartel que diga que el sitio se encuentra disponible si la fecha (día) es menor o igual a 10, en caso contrario mostraremos un mensaje de sitio fuera de servicio.
    
    Observación
    Para obtener la fecha del servidor web debemos llamar a la función date y requerir sólo el día: $dia=date("d");
    A las variables en PHP se les antecede el caracter $. Si a la función date le pasamos el string "d" retornará sólo el día (si queremos la fecha completa: $fecha=date("d/m/Y")
    
    Para verificar si la variable $dia es menor o igual a 10, debemos emplear la instrucción if (condicional), similar a otros lenguajes.*/
    
    $getDay = date("d");
    if($getDay <= 10){
        $alert= "El sitio se encuentra disponible.";
        $class= "text-info";
    }else{
        $alert = "Sitio fuera de servicio.";
        $class= "text-danger";
    }

    echo 
    "<div class='ms-5 me-5 mt-5'> 
        <h3><b>N° 3</b></h3>
        <h5>Mostrar un cartel que diga que el sitio se encuentra disponible si la fecha (día) es menor o igual a 10, en caso contrario mostraremos un mensaje de sitio fuera de servicio.</h5>
        <h5 class='text-center $class'>$alert</h5>
    </div>";
    

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