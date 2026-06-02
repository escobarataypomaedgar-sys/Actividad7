<?php

// vamos ordenar los numeros de manera ascendente con foreach

$numeros = [10, 40, 32, 68, 25];

foreach ($numeros as $num) {
    echo $num . "<br>";

/*El foreach recorre todos los elementos del array.
Cada elemento se guarda temporalmente en la variable $num.*/

}


/*

$numeros = [10, 40, 32, 68, 25];
sort($numeros);
print_r($numeros);

echo no puede mostrar array completo,
por eso utilizamos print_r que muestra todo

*/