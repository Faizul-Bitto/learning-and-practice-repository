<?php

function finalPriceAfterDiscount( $originalPrice, $discount ) {

    $finalPrice = $originalPrice - ( $originalPrice * ( $discount / 100 ) );
    return $finalPrice;
}

fscanf( STDIN, "%d %d", $originalPrice, $discount );

$output = finalPriceAfterDiscount( $originalPrice, $discount );
printf( "Price: %.2f", $output );