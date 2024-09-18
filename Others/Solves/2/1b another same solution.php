<?php
function removeDuplicateCharacters( $input ) {
    $result = '';
    $seen = [];
    $characters = str_split( $input );

    foreach ( $characters as $char ) {

        if ( !in_array( $char, $seen ) ) {
            $seen[] = $char;
            $result .= $char;
        }

    }

    return $result;
}

$input = 'apple';
echo "Input: " . $input . "\n";
echo "Output: " . removeDuplicateCharacters( $input ) . "\n";
?>
