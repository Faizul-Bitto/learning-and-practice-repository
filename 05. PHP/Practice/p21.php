<?php

// $y = 40; declared by default, not passing as argument
function sum( $x, $y = 40 ) {

    $num1 = $x;
    $num2 = $y;

    $result = $num1 + $num2;

    echo $result;
}

sum( 20 );