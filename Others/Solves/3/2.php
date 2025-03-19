<?php

function concatenateTwoStrings( $firstName, $lastName ) {
    printf( "%s, %s", $lastName, $firstName );
}

$input = trim( fgets( STDIN ) );
$exploded = explode( ' ', $input );
$firstName = $exploded[0];
$lastName = $exploded[1];

concatenateTwoStrings( $firstName, $lastName );