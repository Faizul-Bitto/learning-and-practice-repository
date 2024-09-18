<?php

$exists = file_exists( "books5.txt" );

if ( $exists ) {
    unlink( "books5.txt" );
}
