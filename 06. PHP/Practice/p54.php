<?php

$str = "Hello World";

// if we reverse the string manually with for loop:
for ( $i = strlen( $str ) - 1; $i >= 0; $i-- ) {
    echo $str[$i];
}

$reversed = strrev( $str );
echo $reversed;