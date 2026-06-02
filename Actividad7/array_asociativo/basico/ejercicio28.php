<?php

$productos = [
    "Laptop" => 2500,
    "Mouse" => 50,
    "Teclado" => 120
];

foreach($productos as $producto => $precio)
{
    echo $producto . " = S/." . $precio . "<br>";
}

?>