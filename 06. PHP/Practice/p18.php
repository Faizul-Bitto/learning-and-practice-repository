<?php

// Now instead of declaring differently inside the different functions, let's say, we declared those outside of the functions and want to use them inside the functions. To use them, we write 'global' keyword before the variables, inside the functions. This is called Global Scope Variable.

$num1 = 10;
$num2 = 10;

function sum1() {

    global $num1, $num2;

    $result = $num1 + $num2;

    echo $result;
}

function sum2() {

    global $num1, $num2;

    $result = $num1 + $num2;

    echo $result;
}

sum1();
sum2();