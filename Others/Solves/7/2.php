<?php
function lexicography( $s )
{
    $charArray = str_split( $s );
    sort( $charArray );
    $sortedString = implode( '', $charArray );
    return $sortedString;
}

$inputString = trim( fgets( STDIN ) );

$result = lexicography( $inputString );
echo $result;