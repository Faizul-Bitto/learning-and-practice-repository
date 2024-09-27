<?php

// constant variable declare: use define() function -> variable name should be written in UPPERCASE -> define( "VARIABLENAME", "value" );
define( "PI", 3.14 );
// while printing -> don't use any $ keyword in front of the variable name, just use the variable name directly
echo "Value of PI " . PI;
echo "\n";
//another method to run with constant() function
echo constant( "PI" );
// keep that in mind, variables are mutable, can be overridden, but constant variables cannot be overridden or immutable. So, once declared means cannot be changed.
