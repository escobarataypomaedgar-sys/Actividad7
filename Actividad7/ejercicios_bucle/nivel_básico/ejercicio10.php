<?php
$num1 = 0;
$num2 = 1;

// Fibonacci suma los dos números anteriores.

for($i = 1; $i <= 10; $i++){
    echo $num1 . "<br>";

    $temp = $num1 + $num2;
    $num1 = $num2;
    $num2 = $temp;
}

// $temp guarda la suma de manera temporal
?>