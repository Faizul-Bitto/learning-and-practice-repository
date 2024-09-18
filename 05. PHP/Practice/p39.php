<?php

$fruits1 = ['apple1', 'banana1', 'orange1'];
$fruits2 = ['apple2', 'banana2', 'orange2'];
$fruits3 = ['apple3', 'banana3', 'orange3'];

$allFruits = [$fruits1, $fruits2, $fruits3];

// looping over multidimensional indexed array -> keep that in mind we need to loop 2 times:
foreach ( $allFruits as $parentItem ) {
    foreach ( $parentItem as $childItem ) {
        echo $childItem . PHP_EOL;
    }

}
