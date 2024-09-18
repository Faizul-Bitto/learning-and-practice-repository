<?php

// read the file
$file = file( "books.txt" );

foreach ( $file as $line ) {
    echo $line;
}
