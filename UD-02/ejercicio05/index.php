<?php

// Hacer un programa en php que calcule el mayor de dos números almacenados en dos variables usando el condicional if.

$num1 = 4;
$num2 = 5; 

if($num1 > $num2){
    echo "El numero 1 ( $num1 ) es mayor";
    return;
} else if($num2 > $num1){
    echo "El numero 2 ($num2) es mayor";
    return;
} else{
    echo "Los numeros 1 y 2 ($num1 y $num2) son iguales";
    return;
}

?>