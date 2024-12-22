<?php

function findingMaximum( $firstNumber, $secondNumber, $thirdNumber ) {

    return max( $firstNumber, $secondNumber, $thirdNumber );
}

fscanf( STDIN, "%d %d %d", $firstNumber, $secondNumber, $thirdNumber );

echo findingMaximum( $firstNumber, $secondNumber, $thirdNumber );