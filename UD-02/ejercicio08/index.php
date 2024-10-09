<?php

// Hacer un programa en php que defina una constante LIMITE
// genere un numero aleatorio entre 1 y el LIMITE
// muestre por pantalla indicando si es par o impar.
// Usar el operador ternario '?' y la funcion rand()

define('LIMITE', 20);

$numeroRandom = rand(1, LIMITE);

$esParImpar = ($numeroRandom %2 === 0) ? "El numero es par": "el numero es impar";

echo "el numero $numeroRandom  $esParImpar";

?>