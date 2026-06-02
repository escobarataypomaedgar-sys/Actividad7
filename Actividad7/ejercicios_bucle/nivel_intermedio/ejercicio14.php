<?php

/*$palabra = "programa";
$vocales = 0;

for($i = 0; $i < strlen($palabra); $i++){

    $letra = $palabra[$i];

// $palabra[$i] con esto estamos deciendo toma una letra de la palabra y guarda en $letra

    if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){

        $vocales++;

    }
}

echo "Cantidad de vocales: " . $vocales;

*/
$texto = "Los estudiantes tienen gripe";
echo $texto . "<br>";
$minuscula =strtoupper($texto);
$cantidadCaracteres = $minuscula;
$letras = "Eucalipto";
$i = 0;
$numero_vocales = 0;

while ($i <= $cantidadCaracteres) {
    switch ($minuscula) {
        case 'A':
            $numero_vocales++;
            break;
        case 'E':
            $numero_vocales++;
            break;
        case 'I':
            $numero_vocales++;
            break;
        case 'O':
            $numero_vocales++;
            break;
        case 'U':
            $numero_vocales++;
            break;
        default:
            # code...
            break;
    }

    $i++;
}

echo "La cantidad de caracteres es: " . $numero_vocales;

?>