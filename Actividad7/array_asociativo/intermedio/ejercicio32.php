<?php

$notas = [
    "Matemática" => 18,
    "Comunicación" => 15,
    "Programación" => 20
];

$suma = array_sum($notas);
$cantidad = count($notas);

$promedio = $suma / $cantidad;

echo "Promedio: " . $promedio;

?>