<?php

// JSON string/object
$stringData = '{"firstName":"Bill","lastName":"Gates"}';

// decoding JSON to PHP Associative array
$data = json_decode( $stringData );
print_r( $data );