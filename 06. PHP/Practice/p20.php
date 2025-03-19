<?php

/**
 * Parameter and Argument
 * after the function name, inside the parenthesis, we write the parameters
 * arguments are the values that are passed to the function while calling the function inside the parenthesis, these values will be passed in the order of the parameters
 */

// method:
/*
function functionName( parameter, parameter, moreParametersAsManyAsWeWant) {
code
}
 */
function sum( $x, $y ) {

    $num1 = $x;
    $num2 = $y;

    $result = $num1 + $num2;

    echo $result;
}

sum( 10, 40 );