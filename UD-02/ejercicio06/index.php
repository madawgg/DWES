<?php
// Crear un archivo php que, dados dos números almacenadosen dos variables, nos muestre por pantalla el mayor
// de ellos o la frase "Los números son iguales" si son iguales. Usar la estructura switch y el opreador nave espacial.

$num1 = 5;
$num2 = 6;

$compararNumeros = $num1 <=> $num2; 
//  El operador nave espacial da como resultado: 
// -1: si el primer numero es menor que el segundo.
//  1: si el primer numero es mayor que el segundo.
//  0: si los dos numeros son iguales.

echo '<h2>Hecho con switch</h2>';

switch($compararNumeros){
    
    case -1:
        echo "El número mayor es el segundo numero ($num2)";
        break;
        
    case 1: 
        echo "El número mayor es el primer numero ($num1)";
        break;
    
    case 0:
        echo "Los números son iguales";
        break;
    
    default: 
        echo "Los valores introducidos no son válidos";
        break;
}

?>