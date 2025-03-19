<?php

// multi-dimension associative array
$associativeArray = [
    ["firstName" => "Bill", "lastName" => "Gates"],
    ["firstName" => "Mark", "lastName" => "Zuckerberg"],
];

// converting to JSON -> we will use 'json_encode()' function
$json = json_encode( $associativeArray );
echo $json;
// we will see that, the output is now a JSON array, not an object like single dimension associative array encoded in JSON