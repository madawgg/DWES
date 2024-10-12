<?php

//Leer un array de números y mostrar si es positivo o negativo hasta que se encuentre un 0.

function encontrarElCero($array){

    foreach ($array as $valor) {
        
        if($valor === 0) {
            echo "El número es $valor <br>";    
            return;
        }
        if($valor > 0) {
            echo "El número $valor es positivo <br>";
        }else echo "El número $valor es negativo <br>";
    }

}

$arrayNumeros = array(1,2,-45,6,-4,2,0,-2,3,4,);
encontrarElCero($arrayNumeros)

?>