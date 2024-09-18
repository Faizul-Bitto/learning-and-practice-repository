<?php

// we use error_log() and generate an error.log file so that, we can also get to know which error was encountered by the user.

// Set error reporting to log warnings and notices
error_reporting( E_ALL ); // Report all types of errors
ini_set( 'log_errors', 1 ); // Enable error logging
ini_set( 'error_log', 'error.log' ); // Set the error log file

try {
    $a = "hello";
    echo $b; // This will trigger a notice, which will be logged
} catch ( Exception $e ) {
    error_log( $e->getMessage(), 3, 'error.log' ); // this file will be automatically generated if any error occurs.
    echo "Error!";
}