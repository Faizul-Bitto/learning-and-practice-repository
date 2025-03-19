<?php

// read the file
$file = file( "books.txt" );

// count the number of lines
echo "Total books : " . count( $file );