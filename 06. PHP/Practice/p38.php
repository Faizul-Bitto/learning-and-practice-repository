<?php

// multidimensional indexed array -> array inside an array
$fruits1 = ['apple1', 'banana1', 'orange1'];
$fruits2 = ['apple2', 'banana2', 'orange2'];
$fruits3 = ['apple3', 'banana3', 'orange3'];

$allFruits = [$fruits1, $fruits2, $fruits3];

// to print the whole array:
print_r( $allFruits );

// to find an element or value:
echo $allFruits[1][0];
echo "\n";
echo $allFruits[2][2];
echo "\n";
