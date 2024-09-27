<?php

$planet1 = "Mercury";
$planet2 = "Neptune";

echo "The smallest planet is {$planet1} and the largest planet is {$planet2}! \n";
echo "The smallest planet is " . $planet1 . " and the largest planet is " . $planet2 . "!" . "\n";
printf( "The smallest planet is %s and the largest planet is %s! \n", $planet1, $planet2 );
var_dump( $planet1, $planet2 );

$output = sprintf( "The smallest planet is %s and the largest planet is %s! \n", $planet1, $planet2 );
echo $output;