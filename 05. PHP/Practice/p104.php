<?php

$books = <<<EOD
book 1
book 2
book 3
EOD;// EOD = End Of Document

// to add the contents at the end of the file with new line
file_put_contents( 'books2.txt', $books . PHP_EOL, FILE_APPEND );