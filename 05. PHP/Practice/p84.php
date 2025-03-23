<?php

// JSON encode -> will be encoded from an associative array
$associativeArray = [
    "name" => "John",
    "age"  => 20,
];

// converting to JSON -> we will use 'json_encode()' function
$json = json_encode( $associativeArray );
echo $json;
// we will see that, the output is not an associative array, but a JSON string or object starting and ending with { and }