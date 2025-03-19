<?php

$planet1 = "Mercury";
$planet2 = "Neptune";

// to keep the print statement in a variable, we use sprintf()
$output = sprintf( "The smallest planet is %s and the largest planet is %s! \n", $planet1, $planet2 );
// now just simply echo that variable
echo strtoupper( $output );