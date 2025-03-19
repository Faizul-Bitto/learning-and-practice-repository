<?php

// opening a file : fopen(filename, mode)
// for 'w' mode, it will erase the file if it already exists and will create a new file if it doesn't exist. Previous contents will be erased every time you run the code
$file = fopen( "test.txt", "w" );

fwrite( $file, "Hello World" );
fclose( $file );