<?php
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
?>