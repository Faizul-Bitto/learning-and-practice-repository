<?php

$str1 = "Hello World";

// method: substr( string, starting index, length or how many characters we want from the starting index )
$position1 = substr( $str1, 0, 2 );
$position2 = substr( $str1, 4, 3 );

echo $position1;
echo "\n";
echo $position2;