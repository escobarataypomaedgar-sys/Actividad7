<?php

$estudiante = [
    "nombre" => "Carlos",
    "edad" => 20,
    "carrera" => "Computación"
];

foreach($estudiante as $clave => $valor)
{
    echo $clave . " : " . $valor . "<br>";
}

?>