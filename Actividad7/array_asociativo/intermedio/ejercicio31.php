<?php

$notas = [
    "Matemática" => 18,
    "Comunicación" => 15,
    "Programación" => 20
];

foreach($notas as $curso => $nota)
{
    echo $curso . " : " . $nota . "<br>";
}

?>