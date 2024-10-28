<?php

function calculateSquareRoot( $nonNegativeInteger ) {
    //root of a non-negative integer
    return floor( sqrt( $nonNegativeInteger ) );
}

fscanf( STDIN, "%d", $input );

echo calculateSquareRoot( $input );