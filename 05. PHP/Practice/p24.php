<?php

// to ensure that an argument is passed as NULL to the parameter and no error occur, we use "?" before the type
function worldCountryList( ...$country ) {

    print_r( $country );
}

worldCountryList( "Bangladesh", "England", "USA", "Canada", "Iceland", "India", "Nepal", "Sri Lanka" );