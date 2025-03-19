<?php

// to ensure that an argument is passed as NULL to the parameter and no error occur, we use "?" before the type
function sum( ?string $age ) {

    echo $age;
}

sum( null );