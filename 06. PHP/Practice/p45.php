<?php

$billGates = [
    "firstName" => "Bill",
    "lastName"  => "Gates",
    "age"       => 68,
];

// array_key_exists( key, arrayName )
$values = array_flip( $billGates );
print_r( $values );