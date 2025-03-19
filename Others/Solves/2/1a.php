<?php

function removeDuplicate( $string ) {

    // split every single characters
    $singleCharacters = str_split( $string );

    // finding the unique characters
    $uniqueCharacters = array_unique( $singleCharacters );

    // merging the unique characters
    $result = implode( '', $uniqueCharacters );

    return $result;
}

$userInput = trim( fgets( STDIN ) );

$output = removeDuplicate( $userInput );
echo $output;
