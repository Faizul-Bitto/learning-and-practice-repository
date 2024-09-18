<?php

// declaring associative array:
$billGates = [
    "firstName" => "Bill",
    "lastName"  => "Gates",
    "age"       => 68,
];
// it will have key and value pair. We call it associative array with Key Value pair.
// here, firstName, lastName and age are the -> Keys
// Bill, Gates and 62 are -> Values
// all the data are representing Bill Gates
// multiple data when represent a particular scenario, we call that associative array

// printing associative array
print_r( $billGates );
echo "\n";

// to get the specific value:
echo $billGates['firstName'];
echo "\n";
// we can use print_r also:
print_r( $billGates['lastName'] );