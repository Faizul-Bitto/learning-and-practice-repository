<?php

$systems = ["android", "ios"];
$replace = array_replace( $systems, ["windows", "linux"] );
print_r( $replace );

// another method:
$replacement = [0 => "windows", 1 => "linux"];
print_r( array_replace( $systems, $replacement ) );
