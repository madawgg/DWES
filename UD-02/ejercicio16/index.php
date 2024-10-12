<?php

// Leer un array de números y mostrar la media de todos los números introducidos hasta que se
// encuentre un número negativo


function mediaArray($array){
    $contador = 0;
    $suma = 0;
    $continuar= true;
    foreach ($array as $value) {
        if($continuar){
            if($value >= 0){
                $contador++;
                $suma += $value; 
            }
            echo "$value <br>";
        
            if($value < 0){
                echo "El valor $value es negativo <br>";
                $continuar = false;
            }
        }
    }
    $media = $suma / $contador;

    echo "El resultado de la media es $media <br>";
}

$arrayMedias = array(1, 3, 1, 3, 2, -2, 2, 2);
mediaArray($arrayMedias);

?>