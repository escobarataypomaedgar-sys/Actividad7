<?php
$numero = 5;
$factorial = 1;  // este factorial multiplica todos los números anteriores.

for($i = 1; $i <= $numero; $i++){
    $factorial *= $i;
}

echo "Factorial: " . $factorial;
?>