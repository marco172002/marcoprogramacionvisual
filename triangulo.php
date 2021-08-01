<?php

Class Triangulo {

    private $base;
    private $altura;

//FUNCION ESTRUCTURA 
    function Triangulo() {
        $this->base = 0;
        $this->altura = 0;
        }

public function get_formulario (){
        $html = $html = '
             <form name= "transporte" action ="" method = "POST">
             <table aling = "center" border = "i">
             <tr>
             <td colspan = "2">triangulo </td>
             </tr>
             <tr>
                  <td>base</td>
                  <td><input type = "text" name= "base" size= 4></td>
             </tr>
             <tr>
                   <td>Ancho</td>
                  <td><input type = "text" name= "altura" size= 4></td>
             </tr>
             <tr aling = "center">
                   <td aling = "center" colspan = "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
             </tr>
             </table>
             </form>';
        return $html;
        /*
          // imput type " texto"
          // imput type "number "
          // imput type  "email"
          // imput type  "password"
          // imput type  "automit"
          /*
         * 

         */
    }

    public function area($base, $altura) {
        $resultado = $base * $altura;
        return $area;
    }

    public function perimetro($base, $altura) {
        $perimetro = ($base * 2) + ($altura * 2);
        return $perimetro;
    }

}
