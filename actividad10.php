<!-- N°10
Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").
Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:
if ($valor==3)
{
//algoritmo
} -->
<div class="mt-5">
    <h3>N° 10</h3>
    <h5>
    Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").
    Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:
    if ($valor==3)
    {
    //algoritmo
    }
    </h5>
    <h5 class="text-center">
        <?php
            $random = rand(1, 3);
            if ($random==1){
                echo "El numero uno";
            }elseif($random==2){
                echo "El numero dos";
            }else{
                echo "El numero tres";
            }
        ?>
    </h5>
</div>