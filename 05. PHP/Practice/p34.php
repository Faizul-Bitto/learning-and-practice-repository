<?php

// indexed array
$fruits = ["Apple", "Banana", "Orange"];
// will have index for each value, starting with 0

// to show the array output, echo won't work, we have to use print_r for this:
print_r( $fruits );

// to print a specific index value: we can use echo and print_r both, and inside [] -> we need to put the index
echo $fruits[0];
echo "\n";
print_r( $fruits[1] );