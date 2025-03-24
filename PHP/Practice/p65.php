<?php

$string = "Hello World";

$search = "Hello";

// will show from which index the string is found
$result = strpos( $string, $search );

if ( $result !== false ) {
    echo "{$search} found";
} else {
    echo "{$search} not found";
}
