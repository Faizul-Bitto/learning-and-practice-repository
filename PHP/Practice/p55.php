<?php

$string = "***-";

$repeat = "";

for ( $i = 0; $i < 10; $i++ ) {
    $repeat = $repeat . $string;
}

echo $repeat . "\n";

// repeating the string
// echo str_repeat( $string, 5 );