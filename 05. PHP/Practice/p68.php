<?php
$article = "HellO world, thiS Is a Sample Article. Did You Notice the mixEd caSe?";
$article = strtolower( $article );
$string1 = "hello world. how are you";

$parts = explode( ".", $article );
$fixed = "";

print_r( $parts );

for ( $i = 0; $i < count( $parts ); $i++ ) {
    $parts[$i] = ucfirst( trim( $parts[$i] ) );
}

print_r( $parts );

$fixed = implode( ". ", $parts );
echo $fixed;