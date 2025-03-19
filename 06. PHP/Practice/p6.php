<?php

$name = "Earth";

printf( "We're living on %s \n", strtoupper( $name ) ); // -> we can directly use a function like strtoupper() to manipulate the variable with printf()

$firstName = "Isaac";
$lastName = "Newton";

printf( "My name is %s %s \n", $firstName, $lastName );
printf( "My %s Name is %s %s \n", "Full", $firstName, $lastName );

// method to show how much decimal number we want after the decimal point
$float = 2.5565654645;

printf( "The number is %f \n", $float );
printf( "The number is %.2f \n", $float ); // -> .2f -> think like this, how much decimal number we want to show after the decimal point