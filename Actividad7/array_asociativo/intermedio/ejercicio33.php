<?php

$estudiantes = [
    "Carlos" => 18,
    "Ana" => 20,
    "Luis" => 15
];

$mayor = max($estudiantes);
$nombre = array_search($mayor, $estudiantes);

echo "Mayor nota: " . $nombre . " con " . $mayor;

?>