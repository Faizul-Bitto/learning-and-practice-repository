<?php

$string = "     Hello World     ";

// to remove spaces from the beginning
echo ltrim( $string ); // Hello World     Hello World
echo "\n";
// to remove spaces from the end
echo rtrim( $string ); //     Hello World
echo "\n";
// to remove spaces from the beginning and end
echo trim( $string ); // Hello World
