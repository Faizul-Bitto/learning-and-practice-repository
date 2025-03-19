<?php

$billGates1 = [
    "firstName1" => "Bill1",
    "lastName1"  => "Gates1",
    "age"        => 60,
];

$billGates2 = [
    "firstName2" => "Bill2",
    "lastName2"  => "Gates2",
    "age"        => 61,
];

$billGates3 = [
    "firstName3" => "Bill3",
    "lastName3"  => "Gates3",
    "age"        => 62,
];

$persons = [$billGates1, $billGates2, $billGates3];

// to print all the data:
print_r( $persons );

// to print a specific data:
echo $persons[0]['firstName1'];
echo "\n";
print_r( $persons[2]['lastName3'] );