<?php

function findTargetInRotatedArray( $array, $numberOfElements, $target ) {

    $low  = 0;
    $high = $numberOfElements - 1;

    while ( $low <= $high ) {
        $middle = intval( ( $low + $high ) / 2 );

        if ( $array[$middle] == $target ) {
            return $middle;
        }

        if ( $array[$low] <= $array[$middle] ) {

            if ( $target >= $array[$low] && $target < $array[$middle] ) {
                $high = $middle - 1;
            } else {
                $low = $middle + 1;
            }

        } else {

            if ( $target > $array[$middle] && $target <= $array[$high] ) {
                $low = $middle + 1;
            } else {
                $high = $middle - 1;
            }

        }

    }

    return -1;
}

$numberOfElements = intval( fgets( STDIN ) );
$input            = trim( fgets( STDIN ) );
$array            = array_map( 'intval', explode( ' ', $input ) );
$target           = intval( fgets( STDIN ) );

if ( count( $array ) != $numberOfElements ) {
    echo "Error: Number of elements does not match the specified size.\n";
    exit( 1 );
}

$result = findTargetInRotatedArray( $array, $numberOfElements, $target );

if ( $result == -1 ) {
    echo "Element not found\n";
} else {
    echo $result . "\n";
}
