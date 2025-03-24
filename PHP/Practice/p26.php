<?php

// to make sure to return a specific type, we use ':type'
function addTwoNumber( $parameter ): int | float | String | bool | null {

    return $parameter;
}

echo addTwoNumber( "A" );