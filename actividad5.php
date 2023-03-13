<!-- N° 5
Tipos de variables
Los nombres de variables comienzan con el signo $ y son sensibles a mayúsculas y minúsculas (no así las palabras claves del lenguaje).

En PHP no es necesario definir el tipo antes de utilizarla, las mismas se crean en el momento de emplearlas. Las variables se declaran cuando se le asigna un valor, por ejemplo:
$dia = 24; //Se declara una variable de tipo integer.
$sueldo = 758.43; //Se declara una variable de tipo double.
$nombre = "juan"; //Se declara una variable de tipo string.
$exit = true; //Se declara una variable boolean.

También podemos hacer notar que para disponer comentarios de línea debemos utilizar dos
caracteres //
Para la impresión de variables utilizaremos inicialmente el comando echo. 

Programa completo que inicializa y muestra el contenido de cuatro variables de distintos tipos: -->


<div class='ms-5 me-5 mt-5'> 
    <h3><b>N° 5</b></h3>
    <h5>Programa completo que inicializa y muestra el contenido de cuatro variables de distintos tipos:<br> 
    dia = 24; //Se declara una variable de tipo integer.<br>
    sueldo = 758.43; //Se declara una variable de tipo double.<br>
    nombre = juan; //Se declara una variable de tipo string.<br>
    exite = true; //Se declara una variable boolean.</h5><br>
    <h5 class='text-center text-info'> 
        <?php
        $dia = 24; //Se declara una variable de tipo integer.
        $sueldo = 758.43; //Se declara una variable de tipo double.
        $nombre = "juan"; //Se declara una variable de tipo string.
        $existe = true; //Se declara una variable boolean.
        echo   "valor integer: $dia <br>
        valor double: $sueldo <br>
        valor string: $nombre <br>
        valor boolean: $existe <br>";
        ?>
    </h5>
</div>
