<?php

$name = "John Doe";

function name( &$person ) {
    $person = "Jane Doe";
    $greet = "Hello {$person} \n";
    echo $greet;
}

name( $name );
echo $name;

// after using & -> the value changed in the function will also change in the original variable which is $name here