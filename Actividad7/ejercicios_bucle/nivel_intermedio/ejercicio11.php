<?php

// asignamos un variable
$filas = 6;


for ($i=1; $i <= $filas; $i++) { 
    for ($j=1; $j <= $i; $j++) { 
        echo "* ";    
    }
    echo "<br>";


/*
El primer for dice estoy en la fila 1
Entonces el segundo for dibuja un asterisco
Asi sucesivamente hasta el número que hemos asignado, en este caso es 6 

Resultado final
*
* *
* * *
* * * *
* * * * *
* * * * * *

*/ 


}