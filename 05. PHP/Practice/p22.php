<?php

// multiple type hinting
function sum( int | float $x, int $y ) {

    $num1 = $x;
    $num2 = $y;

    $result = $num1 + $num2;

    echo $result;
}

sum( 30.5, 20 );