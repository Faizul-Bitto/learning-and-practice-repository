<?php

$billGates = [
    "firstName" => "Bill",
    "lastName"  => "Gates",
    "age"       => 68,
];

/* we will use foreach for this.
method :
foreach ( 'name of the array variable'    'as keyword'    '$key' '=> keyword' '$value' ) {
code
}
 */
foreach ( $billGates as $key => $value ) {
    echo "{$key} : {$value} \n";
}

// to print the keys only:
foreach ( $billGates as $key => $value ) {
    echo "{$key}\n";
}

// to print the values only:
foreach ( $billGates as $key => $value ) {
    echo "{$value}\n";
}
