<?php

incluye 'incluye / triangulo.php' ;
$triangulo = nuevo triangulo ();
echo  $triangulo -> get_formulario ();

if ( isset ( $_POST [ 'guardar' ])) {
    echo  $triangulo -> $area ( 8 , 0 );
   
}

