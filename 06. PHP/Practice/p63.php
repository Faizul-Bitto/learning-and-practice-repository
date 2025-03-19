<?php

$string = "Hello World";

print_r( str_split( $string ) );

// can even pass how many characters we want to take
print_r( str_split( $string, 5 ) );