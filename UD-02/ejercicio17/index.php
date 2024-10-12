<?php

/*
Crear un array de 10 números y mostrar la media de los números positivos, la media de los
números negativos y la cantidad de ceros.
*/

function principal(){
    analizarArray(crearArray());
}

function calcularMedia($dividendo, $divisor) {
    if($divisor > 0) return $dividendo/$divisor;
    
    else return 0;
}

function crearArray(){
    $array=array();
    
    for ($i=0; $i < 10; $i++) { 
        $numero = rand(-10,10);
        array_push($array, $numero);
        echo "$numero  ";
    }
    //var_dump($array);
   
    return $array;
}

function analizarArray($array){
    $positivos = 0;
    $negativos = 0;
    $cantidadCeros = 0;
    $cantidadPositivos = 0;
    $cantidadNegativos = 0;
    
    foreach ($array as $value) {    

        match (true){
            $value === 0 => $cantidadCeros++,
            $value > 0 => ($positivos += $value) && $cantidadPositivos++,
            $value < 0 => ($negativos += $value) && $cantidadNegativos++,
        };

    }

    $mediaPositivos = calcularMedia($positivos, $cantidadPositivos);
    $mediaNegativos = calcularMedia($negativos,$cantidadNegativos);
    
    echo "<br> ";
    echo "La cantidad de ceros es: $cantidadCeros <br>";
    echo "La media de los números positivos es: $mediaPositivos, cantidad: $cantidadPositivos<br>";
    echo "La media de los números negativos es: $mediaNegativos, cantidad: $cantidadNegativos <br>";
}

echo principal();
?>