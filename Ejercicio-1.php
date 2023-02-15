<?php
/**Ejercicio 1:
Plantear una clase Calculadora que contenga 4 métodos (sumar, resta, multiplicación, división), 
estos métodos recibirán 2 parámetros.
 */



    function Calcular($numero1, $numero2){

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $dividir = $numero1 / $numero2;
        

        echo "<h1>Calculadora</h1>";
        echo "<br>";
        echo "El primer numero ingresado es: .$numero1";
        echo "El segundo numero ingresado es: .$numero2";
        echo "Suma"."<br>";
        echo "La suma de estos numero es: .$suma.";
        echo "Resta"."<br>";
        echo "La resta de estos numeros es: .$resta.";
        echo "Multiplicacion"."<br>";
        echo "La multiplicacion de estos numeros es: .$multiplicacion.";
        echo "Division"."<br>";
        echo "La divicion de estos numeros es: .$dividir.";

    }

    Calcular(34, 56)

?>