<?php
// Hacer un programa en php que muestre el texto contenido en las variables llamadas nombre y edad.

// Si nombre es NULL monstrara "Hola desconocido".
// Si se declara un nombre X y edad es NULL mostrará "Hola $nombre. No se tu edad".
// Si se declara un nombre X y edad Y mostrará "Hola X, Tienes Y años.

$nombre = 'Javier';
$edad = 30;

if($nombre === NULL){
    echo 'Hola Desconocido.';
    return;
}else if($nombre!==NULL && $edad===NULL){
    echo "Hola $nombre. No se tu edad." ;
    return;
}else{
    echo "Hola $nombre, Tienes $edad años";
}
?>



