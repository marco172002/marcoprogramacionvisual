<?php

Class Triangulo {

    private $base;
    private $altura ;

// FUNCION ESTRUCTURA 
    function  Triangulo () {
        $esto -> base = 0 ;
        $esto -> altura = 0 ;
        }

 function  pública get_formulario () {
        $html = $ html = '
             <formulario nombre = "transporte" acción = "" método = "POST">
             <table aling = "center" border = "i">
             <tr>
             <td colspan = "2"> triangulo </td>
             </tr>
             <tr>
                  <td> base </td>
                  <td> <input type = "text" name = "base" size = 4> </td>
             </tr>
             <tr>
                   <td> Ancho </td>
                  <td> <input type = "text" name = "altura" size = 4> </td>
             </tr>
             <tr aling = "centro">
                   <td aling = "center" colspan = "2"> <center> <input type = "submit" name = "guardar" value = "Resolver"> </center> </td>
             </tr>
             </table>
             </form> ' ;
        return  $html ;
        / *
          // tipo de entrada "texto"
          // tipo de entrada "número"
          // tipo de entrada "correo electrónico"
          // tipo de entrada "contraseña"
          // tipo de entrada "automit"
          / *
         * 
         * /
    }

     área de funciones  públicas ( $base , $altura ) {
        $ resultado = $base * $altura ;
        return  $ area ;
    }

     función  pública perimetro ( $base , $altura ) {
        $ perimetro = ( $base * 2 ) + ( $altura * 2 );
        return  $perimetro ;
    }

}
