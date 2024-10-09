<?php

// Hacer un programa que, indicada una nomina en una variable, 
// si es menor de 800€ le haga un incremento del 20%
// si esta entre 800€ y 1200€ la deje como esta, y si es mayor le quite un 15%.
// usar el condicional if.


$nomina = 600;
$nominaActualizada = $nomina;

if($nomina < 800){
    $nominaActualizada += $nomina * 0.2;
}elseif($nomina > 1200){
    $nominaActualizada -= $nomina * 0.15;
}else{
    $nomina;
}

echo 'La nomina anterior era de: ' .  number_format($nomina, 2, ',', '.') . '€' . 

'<hr>'

. ' La nomina actualizada es de: ' . number_format($nominaActualizada, 2, ',', '.') . '€';
?>