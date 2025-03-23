<?php

// for 'a' mode, it will not erase previous contents every time you run the code and will add the contents at the end of the file
$file = fopen( "test.txt", "a" );
$data = "Hello World\n";

fwrite( $file, $data );
fclose( $file );