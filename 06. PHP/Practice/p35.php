<?php

// how to loop over on indexed array
$systems = ["android", "ios", "windows", "linux"];

/* we will use foreach for this.
method :
foreach ( 'name of the array variable' 'as keyword' 'variable to pick each item in the array' ) {
code
}
 */
foreach ( $systems as $system ) {
    echo $system . PHP_EOL;
}
