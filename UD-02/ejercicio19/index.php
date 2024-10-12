<?php

/*
Una empresa necesita una página para gestionar las facturas. 
En cada factura figura: 
el código del artículo,
la cantidad vendida en litros y 
el precio por litro. 
Se pide introducir en un array multidimensional 5 facturas
indicar la Facturación total, 
cantidad en litros vendidos del artículo 1 y 
cuantas facturas se emitieron de más de 600 €.
*/


function calcularTotal($litros, $precio){
    return $litros * $precio;
}

function formatearNumero($numero){
    return number_format($numero, 2, ',', '.') . '€';
}

function obtenerInformacion($facturas){
    $facturacionTotal = 0;
    $litrosArticulo = 0;
    $cantidadSuperior = 0;
    $articulo = 1;

    if (($articulo - 1) >= 0 && ($articulo - 1) < count($facturas)){

        foreach ($facturas as $key => $factura) {
      
                $facturacionIndividual = calcularTotal($factura['Litros'], $factura['Precio/Litro']); 
                $facturacionTotal += $facturacionIndividual;
        
                if($key === $articulo - 1 ){
                $litrosArticulo = $factura['Litros'];
                $codigoArticulo = $factura['codigo'];
                }
        
                if($facturacionIndividual > 600){
                $cantidadSuperior++;
                }
     
        }

        echo 'La facturación total ha sido de: ' . formatearNumero($facturacionTotal) . '<br>';
        echo 'La cantidad de litros vendidos del articulo '. $codigoArticulo . ' ha sido: '. $litrosArticulo . 'l <br>';
        echo "Se han emitido $cantidadSuperior facturas por encima de 600,00€.";

    }else{
        echo "Busqueda no encontrada.";
    }
}

$facturas = [
    ['codigo' => '1A1B', 'Litros' => 100.5, 'Precio/Litro' => 5.00],
    ['codigo' => '2A2B', 'Litros' => 200.4, 'Precio/Litro' => 1.00],
    ['codigo' => '3A3B', 'Litros' => 120.1, 'Precio/Litro' => 5.20],
    ['codigo' => '4A4B', 'Litros' => 400.2, 'Precio/Litro' => 1.50],
    ['codigo' => '5A5B', 'Litros' => 312.2, 'Precio/Litro' => 2.20],
];

obtenerInformacion($facturas);
?>