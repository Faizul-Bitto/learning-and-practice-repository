<?php
function calculateToyCars( $wheels, $bodies, $figures ) {
    $carsByWheels = (int) ( $wheels / 4 );
    $carsByBodies = $bodies;
    $carsByFigures = (int) ( $figures / 2 );

    return min( $carsByWheels, $carsByBodies, $carsByFigures );
}

fscanf( STDIN, "%d %d %d", $wheels, $bodies, $figures );

$cars = calculateToyCars( $wheels, $bodies, $figures );

echo $cars . PHP_EOL;