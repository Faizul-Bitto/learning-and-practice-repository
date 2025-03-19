<?php

// count the number of vowels in each string in an array and reverse the string
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ( $strings as $string ) {
    $count = substr_count( $string, 'A' ) + substr_count( $string, 'E' ) + substr_count( $string, 'I' ) + substr_count( $string, 'O' ) + substr_count( $string, 'U' ) + substr_count( $string, 'a' ) + substr_count( $string, 'e' ) + substr_count( $string, 'i' ) + substr_count( $string, 'o' ) + substr_count( $string, 'u' );
    $reversed = strrev( $string );
    echo "Original string: {$string}, Vowel count: {$count}, Reversed string: {$reversed}\n";
}
