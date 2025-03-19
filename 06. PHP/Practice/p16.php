<?php

// normal if-else
$number = 10;

if ( 10 == $number ) {
    echo "Ten \n";
} else {
    echo "A number \n";
}

// cleaning up with ternary operator
$numberInWord = ( 10 == $number ) ? "Ten" : "A number";
// variable = (condition) ? (take this if true) : (take this if false)
echo $numberInWord;
echo "\n";

// Another Example:
$n = 10;

if ( $n % 2 == 0 ) {
    echo "Even \n";
} else {
    echo "Odd \n";
}

// cleaning up with ternary operator
$evenOrOdd = ( $n % 2 == 0 ) ? "Even" : "Odd";
echo $evenOrOdd;
echo "\n";

// Another Example:
$num = 10;

if ( $num == 12 ) {
    echo "Twelve \n";
} elseif ( $num == 10 ) {
    echo "Ten \n";
} else {
    echo "A number \n";
}

// cleaning up with ternary operator
$result = ( 12 == $num ) ? "Twelve" : ( ( 10 == $num ) ? "Ten" : "A number" );
echo $result;
