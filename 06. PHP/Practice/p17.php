<?php

// $num1 and $num2 both variables are with same name in both functions below, but they have different values. Though with same name, they are different variables.Because they are declared inside of those different functions. So the values won't be overwritten. When a variable works in a single function, it is called local scope variable.
function sum1() {
    $num1 = 10;
    $num2 = 10;

    $result = $num1 + $num2;

    echo $result;
}

function sum2() {
    $num1 = 100;
    $num2 = 100;

    $result = $num1 + $num2;

    echo $result;
}

sum1();
sum2();