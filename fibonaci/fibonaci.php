<?php

$numero1= 0;
$numero2= 1;
$numero3;
 for ($i= 0 ; $i<= 20;$i++){
     $numero3= $numero1 + $numero2;
     $numero1 = $numero2;
     $numero2 = $numero3;
     echo $numero3 . "<br>";
     echo " ";
 }


?>

