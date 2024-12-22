<?php

// Given array of random numbers
$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];

// Your Code goes here

// Filter out the even numbers greater than 50 from the array using the array_filter function.
$filteredNumbers = array_filter( $randomNumbers, function ( $number ) {
    return $number > 50 && $number % 2 == 0;
} );

// Then, Multiply each element of the filtered array by 2 using the array_map function.
$multipliedNumbers = array_map( function ( $number ) {
    return $number * 2;
}, $filteredNumbers );

// Then Display the resulting array after applying both filtering and mapping operations using print_r() function.
print_r( $multipliedNumbers );