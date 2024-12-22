<?php
function lexicographyAtTheEnd( $s )
{
    $charArray = str_split( $s );
    sort( $charArray );
    $sortedString   = implode( '', $charArray );
    $reversedString = strrev( $sortedString );
    return $reversedString;
}

$inputString = trim( fgets( STDIN ) );

$result = lexicographyAtTheEnd( $inputString );
echo $result;