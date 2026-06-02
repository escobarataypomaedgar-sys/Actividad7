<?php

$agenda = [
    "Carlos" => "987654321",
    "Ana" => "912345678",
    "Luis" => "999888777"
];

foreach($agenda as $nombre => $telefono)
{
    echo $nombre . " : " . $telefono . "<br>";
}

?>