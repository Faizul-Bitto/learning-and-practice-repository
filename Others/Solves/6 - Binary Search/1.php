<?php

function findMin( $array, $number ) {
    $low  = 0;
    $high = $number - 1;

    while ( $low < $high ) {
        $mid = $low + intval( ( $high - $low ) / 2 );

        if ( $array[$mid] > $array[$high] ) {
            $low = $mid + 1;
        } else {
            $high = $mid;
        }

    }

    return $array[$low];
}

$number = intval( fgets( STDIN ) );
$input  = trim( fgets( STDIN ) );
$array  = array_map( 'intval', explode( ' ', $input ) );

if ( count( $array ) != $number ) {
    exit( 1 );
}

echo findMin( $array, $number );