<?php

/*
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for. 
Cambia el código para hacerlo con un while y con un do-while
*/

function multiplosDeCincoConFor(){

    echo '<h2>Bucle for</h2>';

    for ($i=1; $i <= 100; $i++) { 

        if($i%5 === 0) echo "$i <br>";
       
    }
}

multiplosDeCincoConFor();

function multiplosDeCincoConWhile(){

    echo '<h2>Bucle while</h2>';

    $a = 1;
    while ($a <= 100) {
        if($a % 5 === 0) echo "$a <br>";
        $a++;
    }
}
multiplosDeCincoConWhile();

function multiplosDeCincoConDoWhile(){
    
    echo '<h2>Bucle Do While</h2>';

    $a = 1;
    do {

        if($a % 5 === 0) echo "$a <br>";
        $a++;

    } while ($a <= 100);
}
multiplosDeCincoConDoWhile();

?>
