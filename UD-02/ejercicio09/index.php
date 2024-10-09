<?php

// Crear una pagina que calcule el importe final de una factura
// Crear 2 variables que contendran el precio de un producto
// y las unidades adquiridas.
// crear una constante llamada IVA del 21%
// Calcular y devolver:
// el precio del producto, 
// las unidades adquiridas,
// el importe base de la factura,
// el importe del iva 
// el importe final de la factura.

$precioProducto = 34;
$unidadesAdquiridas = 5;

define('IVA', 0.21);


function formatearNumero($numero){
    $numeroFormateado = number_format($numero, 2, ',', '.').'€';
    return $numeroFormateado;
}

function calcularImporteBase($precio, $unidades){
    return $precio * $unidades;
}

function calcularIva($importeBase){
    return $importeBase * IVA;
}

function calcularImporteFinal($importeBase, $importeIVA){
    return $importeBase + $importeIVA;
}


//calcular importes
$importeBase = calcularImporteBase($precioProducto,$unidadesAdquiridas);
$importeIva = calcularIva($importeBase);
$importeFinal = calcularImporteFinal($importeBase, $importeIva);


echo 'Precio del producto: '. FormatearNumero($precioProducto).'<br>';
echo "Unidades adquiridas: $unidadesAdquiridas <br>";
echo 'Importe base: '. FormatearNumero($importeBase) . '<br>';
echo 'Importe IVA: ' . FormatearNumero($importeIva) . '<hr>';
echo 'Importe final de la factura: '. FormatearNumero($importeFinal);

?>
