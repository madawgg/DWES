

<?php
// Crea una pagina html donde se mostrará un titulo con la etiqueta html <h1>
// Este titulo sera una variable php.


$titulo='Soy el titulo';

$pagina=
"
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body>
        <h1>$titulo</h1>
    </body>
</html>
";

echo $pagina;
?>