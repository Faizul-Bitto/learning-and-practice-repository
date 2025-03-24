<?php

$books = [
    "book1",
    "book2",
    "book3",
    "book4",
    "book5",
];

$file = fopen( "books.txt", "a" );

foreach ( $books as $book ) {
    fwrite( $file, $book . PHP_EOL );
}

fclose( $file );