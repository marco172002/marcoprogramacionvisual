<?php

 echo "<h1>TAREA</h1>";
echo "<h3>ESTOS SON LOS NUMEROS NUMEROS IMPARES HASTA EL 60: </h3>";

for ($impar = 0; $impar <= 60; $impar++) {
   if ($impar % 2 == 1) {
    // echo, print, print_r, var_dump 
    echo  " <h4> El " .$impar. " es un valor impar </h4>";

}
}

