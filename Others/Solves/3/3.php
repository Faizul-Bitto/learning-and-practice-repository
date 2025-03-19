<?php

function secondToHourMinute( $second ) {

    $hour = floor( $second / 3600 );
    $minute = floor( ( $second % 3600 ) / 60 );

    return "$hour:$minute";
}

$input = trim( fgets( STDIN ) );
echo secondToHourMinute( $input );