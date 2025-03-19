<?php

$content = file_get_contents( "books.txt" );

$books = explode( "\n", $content );

echo "Total books : " . count( $books ) - 1;