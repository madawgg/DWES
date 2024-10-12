<?php

/*
Dadas las edades y alturas de 5 alumnos introducidos en un array, mostrar la edad y la
estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que
miden más de 1.75
*/


function calcularMedia($dividendo, $divisor){

    if ($divisor <= 0){  
        return "El divisor '$divisor' es invalido para calcular la media.";
    } else {
        return round($dividendo / $divisor, 2);
    }     
}

function analizarAlumnos($alumnos){
    $sumaEdades = 0;
    $sumaAlturas = 0;
    $contador = 0;
    $cantidadAlumnosMayores = 0;
    $cantidadAlumnosAltos = 0;


    foreach ($alumnos as $alumno) {
        $sumaEdades += $alumno['edad'];
        $sumaAlturas += $alumno['altura'];
        $contador++;

        if($alumno['edad'] >= 18){
            $cantidadAlumnosMayores++;
        }
        if($alumno['altura'] > 1.75 ){
            $cantidadAlumnosAltos++;
        }
    }
    echo "Resumen de los $contador alumnos: <br>";
    echo 'La media de edad es: '. calcularMedia($sumaEdades, $contador) . '<br>';
    echo 'La altura media es: '. calcularMedia($sumaAlturas, $contador) . '<br>';
    echo "La cantidad de alumnos mayores de 18 años es: $cantidadAlumnosMayores <br>";
    echo "La cantidad de alumnos mas altos de 1.75 metros es: $cantidadAlumnosAltos";

}

$alumnos =[
    ['altura' => 1.64, 'edad' => 16],
    ['altura' => 1.55, 'edad' => 15],
    ['altura' => 1.72, 'edad' => 25],
    ['altura' => 1.86, 'edad' => 31],
    ['altura' => 1.62, 'edad' => 35],
    ['altura' => 1.90, 'edad' => 18],
];

analizarAlumnos($alumnos);
?>