<?php

$string = "Hello World";

// To explode the words in the string and get the output as array:
$exploded = explode( " ", $string );
// Here wherever there is a space, it will be splitted

// to join the words in the array: join() / implode()

$joined1 = implode( " ", $exploded );

$joined2 = join( "_", $exploded );

print_r( $joined1 );
echo "\n";
print_r( $joined2 );
echo "\n";