<?php

function calculateSquareRoot( $Number ) {

    if ( $Number < 2 ) {
        return $Number;
    }

    $low  = 0;
    $high = $Number;
    $ans  = 0;

    while ( $low <= $high ) {
        $mid        = intdiv( $low + $high, 2 );
        $midSquared = $mid * $mid;

        if ( $midSquared == $Number ) {
            return $mid;
        } elseif ( $midSquared < $Number ) {
            $low = $mid + 1;
            $ans = $mid;
        } else {
            $high = $mid - 1;
        }

    }

    return $ans;
}

fscanf( STDIN, "%d", $Number );

echo calculateSquareRoot( $Number );
