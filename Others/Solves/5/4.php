<?php

function celsiusToFahrenheit( $celsius ) {
    return $celsius * 9 / 5 + 32;
}

fscanf( STDIN, "%f", $celsius );

$result = celsiusToFahrenheit( $celsius );

printf( "The temperature in Fahrenheit is: %.2f", $result );