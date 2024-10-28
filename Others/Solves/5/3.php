<?php

function findingAverage( $firstNumber, $secondNumber, $thirdNumber ) {

    return ( $firstNumber + $secondNumber + $thirdNumber ) / 3;
}

fscanf( STDIN, "%f %f %f", $firstNumber, $secondNumber, $thirdNumber );

$result = findingAverage( $firstNumber, $secondNumber, $thirdNumber );

printf( "Average: %.2f", $result );