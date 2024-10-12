<?php

//Programa que muestre en pantalla la tabla de multiplicar del 1 al 10 con el formato

function tablaDeMultiplicar($numero){

    for ($i=$numero; $i <= $numero; $i++) { 
       
        echo "Tabla del $i <hr>";
       
        for ($j=1; $j <= 10; $j++) { 
            $resultado = $i*$j;
            
            echo "$i x $j = $resultado <br>";

        }
    }

}

tablaDeMultiplicar(4);

?>