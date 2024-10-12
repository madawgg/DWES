<?php

// Programa que muestre por pantalla los 5 primeros números pares.

function cincoPrimerosPares(){

    $cantidadPares = 5;
    $indice = $cantidadPares*2;
    
    for ($i=1; $i <= $indice; $i++) { 
        if($i%2===0) echo "$i <br>";
    }

}


cincoPrimerosPares();

?>