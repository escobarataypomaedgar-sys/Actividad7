<?php

$agenda = [
    "Carlos" => "987654321",
    "Ana" => "912345678",
    "Luis" => "999888777"
];

$buscar = "Ana";

if(isset($agenda[$buscar]))
{
    echo "Teléfono: " . $agenda[$buscar];
}
else
{
    echo "No encontrado";
}

?>