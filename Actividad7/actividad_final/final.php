<?php

// ARRAY INDEXADO
$productos = ["Laptop", "Mouse", "Teclado", "Monitor"];

// ARRAY ASOCIATIVO
$datos = [
    [
        "nombre" => "Laptop",
        "precio" => 2500,
        "stock" => 5
    ],

    [
        "nombre" => "Mouse",
        "precio" => 50,
        "stock" => 20
    ],

    [
        "nombre" => "Teclado",
        "precio" => 120,
        "stock" => 10
    ],

    [
        "nombre" => "Monitor",
        "precio" => 800,
        "stock" => 8
    ]
];

echo "<h1>SISTEMA DE REGISTRO DE PRODUCTOS</h1>";

echo "<hr>";

echo "<h2>Listado de Productos</h2>";

$totalInventario = 0;

// BUCLE
foreach($datos as $producto)
{
    $subtotal = $producto["precio"] * $producto["stock"];

    echo "Producto: " . $producto["nombre"] . "<br>";
    echo "Precio: S/. " . $producto["precio"] . "<br>";
    echo "Stock: " . $producto["stock"] . "<br>";
    echo "Valor en Inventario: S/. " . $subtotal . "<br>";

    echo "<hr>";

    $totalInventario += $subtotal;
}

// REPORTE

echo "<h2>REPORTE GENERAL</h2>";

echo "Cantidad de productos: " . count($datos) . "<br>";

echo "Valor total del inventario: S/. " . $totalInventario;

?>