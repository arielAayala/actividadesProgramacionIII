<!-- N° 11
Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while. 
Observación: La estructura for permite incrementar una variable de 2 en 2:
for($f=2;$f<=20;$f=$f+2)
 -->
<div>
    <h3>N° 11</h3>
    <h5>Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while. 
    Observación: La estructura for permite incrementar una variable de 2 en 2:
    for($f=2;$f<=20;$f=$f+2)
    </h5>
    <h5 class="text-center">
        <?php
            for ($i=0; $i <= 10; $i++) { 
                echo "$i x 2 = ".($i*2)."<br>";
            }
            echo "<br>";
            $a=0;
            while ($a <= 10) {
                echo "$a x 2 = ".($a*2)."<br>";
                $a++;
            }
            echo "<br>";
            $b=0;
            do {
                echo "$b x 2 = ".($b*2)."<br>";
                $b++;
            } while ($b <= 10);
        ?>
    </h5>
</div>