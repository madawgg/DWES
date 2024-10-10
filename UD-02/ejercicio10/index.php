<?php

/*
Crear las variables código, nombre, apellidos, puesto, sueldo, edad, num hijos y sucursal e inicializarlas con
los siguientes valores:
codigo | nombre | apellidos | puesto  | sueldo | edad | num_hijos | sucursal
   1   |  Tom   |Smith      |Vendedor | 75000  |  26  |     0     | New York

Realizar los siguientes cálculos de retenciones:
Retención 1.- Si es Vendedor y el Sueldo mayor a 70000 aplicar una retención del 10% sobre el
sueldo y en caso contrario el 20%
Retención 2.- Si tiene más de 50 años o más de 2 hijos aplicar una retención del 5% sobre el
sueldo y en caso contrario el 10%
Retención 3.- Si el sueldo es mayor de 50000 y menor de 80000 aplicar una retención del 5%
sobre el sueldo y en caso contrario el 12%
Retención 4.- Si tiene 1 o 2 hijos aplicar una retención del 10% sobre el sueldo y en caso
contrario el 5%
Retención 5.- Si el sueldo es mayor de 80000 o no tiene hijos aplicar una retención del 15%
sobre el sueldo y en caso contrario el 5%
*/

$codigo = 1;
$nombre = 'Tom';
$apellidos = 'Smith';
$puesto = 'Vendedor';
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = 'New York';
$sueldoConRetencion = $sueldo;

function formatearNumero($numero){
    return number_format($numero, 2, ',', '.') . '$';
}

function calcularRetencion($sueldo, $porcentajeRetencion){
    return $sueldo * ($porcentajeRetencion / 100);
}


// Retención 1
function retencion1($puesto, $sueldo) {
    return ($puesto === 'Vendedor' && $sueldo > 70000) ? calcularRetencion($sueldo, 10) : calcularRetencion($sueldo, 20);
}

// Retención 2
function retencion2($edad, $num_hijos, $sueldo) {
    return ($edad > 50 || $num_hijos > 2) ? calcularRetencion($sueldo, 5) : calcularRetencion($sueldo, 10);
}

// Retención 3
function retencion3($sueldo) {
    return ($sueldo > 50000 && $sueldo < 80000) ? calcularRetencion($sueldo, 5) : calcularRetencion($sueldo, 12);
}

// Retención 4
function retencion4($num_hijos, $sueldo) {
    return ($num_hijos === 1 || $num_hijos === 2) ? calcularRetencion($sueldo, 10) : calcularRetencion($sueldo, 5);
}

// Retención 5
function retencion5($sueldo, $num_hijos) {
    return ($sueldo > 80000 || $num_hijos === 0) ? calcularRetencion($sueldo, 15) : calcularRetencion($sueldo, 5);
}

// Aplicar todas las retenciones secuencialmente
$sueldoConRetencion -= retencion1($puesto, $sueldo);
echo 'El sueldo despues de retencion 1 es de: '. formatearNumero($sueldoConRetencion).'<br>';
$sueldoConRetencion -= retencion2($edad, $num_hijos, $sueldoConRetencion);
echo 'El sueldo despues de retencion 2 es de: '. formatearNumero($sueldoConRetencion).'<br>';
$sueldoConRetencion -= retencion3($sueldoConRetencion);
echo 'El sueldo despues de retencion 3 es de: '. formatearNumero($sueldoConRetencion).'<br>';
$sueldoConRetencion -= retencion4($num_hijos, $sueldoConRetencion);
echo 'El sueldo despues de retencion 4 es de: '. formatearNumero($sueldoConRetencion).'<br>';
$sueldoConRetencion -= retencion5($sueldoConRetencion, $num_hijos);
echo 'Sueldo despues de retención 5 es de: ' . formatearNumero($sueldoConRetencion) . '<hr>';
echo 'El sueldo final despues de las retenciones es de: ' . formatearNumero($sueldoConRetencion);

?> 
