<?php

for ( $i1 = 0; $i1 <= 10; $i1++ ) {

// after meeting the condition, break the loop, won't execute the rest of the code
    if ( $i1 == 5 ) {
        break;
    }

    echo $i1 . "\n";

}

echo "\n";

for ( $i = 0; $i <= 10; $i++ ) {

// after meeting the condition, it will be skipped at that point and jump to the next iteration
    if ( $i % 2 == 0 ) {
        continue;
    }

    echo $i . "\n";

}
