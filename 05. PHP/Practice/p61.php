<?php

$wrongName1 = "John  Doe"; // two spaces
$wrongName2 = "John..Doe"; // two dots

$fixedName1 = str_replace( "  ", " ", $wrongName1 ); //  replace two spaces with one space
echo $fixedName1;
echo "\n";
$fixedName2 = str_replace( "..", ".", $wrongName2 ); //  replace two dots with one dot
echo $fixedName2;
echo "\n";

// it can even accept array as well. Pass the what you want to replace and what you want to replace with in the array.
$wrongName3 = "John  ..Doe";
$fixedName3 = str_replace( ["  ", ".."], [" ", "."], $wrongName3 );
echo $fixedName3;