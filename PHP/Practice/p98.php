<?php

// read the file
$file = fopen( "books.txt", "r" );

while ( !feof( $file ) ) {
    echo fgets( $file );
}
