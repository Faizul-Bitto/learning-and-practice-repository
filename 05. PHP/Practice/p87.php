<?php

// JSON array
$stringData = '[{"firstName":"Bill","lastName":"Gates"},{"firstName":"Mark","lastName":"Zuckerberg"}]';

// decoding JSON to PHP Associative array
$data = json_decode( $stringData );
print_r( $data );