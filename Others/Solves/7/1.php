<?php
function sortByLength( $arr )
{
    usort( $arr, function ( $a, $b )
    {
        return strlen( $a ) - strlen( $b );
    } );
    return $arr;
}

$number = intval( fgets( STDIN ) );
$input  = trim( fgets( STDIN ) );
$array  = explode( ' ', $input );

if ( count( $array ) != $number )
{
    exit( 1 );
}

$sortedArr = sortByLength( $array );

// Printing the sorted array
foreach ( $sortedArr as $str )
{
    echo $str . " ";
}
