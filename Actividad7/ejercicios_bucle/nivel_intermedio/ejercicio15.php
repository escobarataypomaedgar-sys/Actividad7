<?php

$opcion = 0;

do{

    echo "MENU <br>";
    echo "1. Sumar <br>";
    echo "2. Restar <br>";
    echo "3. Salir <br>";

    $opcion = 1; // opción simulada

    if($opcion == 1){

        $a = 10;
        $b = 5;

        $suma = $a + $b;

        echo "La suma es: " . $suma . "<br>";

    }elseif($opcion == 2){

        $a = 10;
        $b = 5;

        $resta = $a - $b;

        echo "La resta es: " . $resta . "<br>";

    }elseif($opcion == 3){

        echo "Saliendo del programa <br>";

    }else{

        echo "Opción incorrecta <br>";
    }

}while($opcion != 3);

?>