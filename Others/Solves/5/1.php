<?php

function bonus( $input ) {
    return floor( $input * ( 10 / 100 ) );
}

$input = trim( fgets( STDIN ) );

echo bonus( $input );
