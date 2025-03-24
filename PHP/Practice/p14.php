<?php

/*
If statement ->
If (condition) {
code to be executed if condition is true
}else {
code to be executed if condition is false
}
 */

// Example - 1
$n = 12;

if ( $n % 2 == 0 ) {
    echo "{$n} is Even \n";
} else {
    echo "{$n} is Odd \n";
}

// Example - 2
if ( $n > 10 ) {
    echo "{$n} is greater than 10 \n";
} else {
    echo "{$n} is less than 10 \n";
}

// Example - 3 with else if

/*
If (condition) {
code to be executed if condition is true
}elseif (condition) {
code to be executed if condition is true
}elseif (condition) {
code to be executed if condition is true
}else {
code to be executed if all conditions are false
}
 */

$alam = 100;
$rahim = 200;

if ( $alam == $rahim ) {
    echo "Alam has equal amount of money as Rahim \n";
} elseif ( $alam > $rahim ) {
    echo "Alam has more amount of money than Rahim \n";
} elseif ( $alam < $rahim ) {
    echo "Alam has less amount of money than Rahim \n";
} elseif ( $alam >= $rahim ) {
    echo "Alam has more or equal amount of money than Rahim \n";
}

// Example - 4
$age = 14;

if ( $age >= 13 && $age <= 19 ) {
    echo "This person is a teenager \n";
} else {
    echo "This person is not a teenager \n";
}

// Example - 5
$food = "apple";

// for any static data, it's always a good practice to use that static data first in the condition check, so that, unwillingly if the declared operator is '=', will show error / won't work
if ( "tuna" == $food ) {
    echo "It has Vitamin D \n";
} else {
    echo "Not matching \n";
}

// Example - 6
$food = "tuna";

// for any static data, it's always a good practice to use that static data first in the condition check, so that, unwillingly if the declared operator is '=', will show error / won't work
if ( "tuna" == $food || "apple" == $food ) {
    echo "It's a food \n";
} else {
    echo "Not a food \n";
}
