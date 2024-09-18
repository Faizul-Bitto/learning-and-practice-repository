<?php

function lookForTen( int $a, int $b ) {

    if ( $a == 10 || $b == 10 || ( $a + $b ) == 10 ) {
        return "True";
    } else {
        return "False";
    }

}

$input = trim( fgets( STDIN ) );

$exploded = explode( ' ', $input );

$firstInput = (int) $exploded[0];
$secondInput = (int) $exploded[1];

$output = lookForTen( $firstInput, $secondInput );
echo $output;