<?php

function lookForTen( int $a, int $b ) {

    if ( $a == 10 || $b == 10 || ( $a + $b ) == 10 ) {
        return "True";
    } else {
        return "False";
    }

}

$input = trim( fgets( STDIN ) );
list( $firstInput, $secondInput ) = array_map( 'intval', explode( ' ', $input ) );

$output = lookForTen( $firstInput, $secondInput );
echo $output;