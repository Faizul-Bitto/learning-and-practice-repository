<?php

// to declare a number in decimal, simply write the number
$decimal = 12;
// to declare a number in octal, simply put one zero(0) before the number
$octal = 012;
// to declare a number in hexadecimal, simply put one zero(0) with x before the number
$hexadecimal = 0x12;
// to declare a number in binary, simply put one zero(0) with b before the number
$binary = 0b1100;

// conversions of ($decimal, $octal, $hexadecimal, $binary) to decimals
printf( "The number is %d, %d, %d and %d \n", $decimal, $octal, $hexadecimal, $binary );
// conversions to binaries
printf( "The binary of %d is %b \n", $decimal, $decimal ); // -> with %d, it will first convert the decimal to decimal and then with %b, convert it to binary
printf( "The binary of %d is %b \n", $octal, $octal ); // -> with %d, it will first convert the octal to decimal and then with %b, convert it to binary
printf( "The binary of %d is %b \n", $hexadecimal, $hexadecimal ); // -> with %d, it will first convert the hexadecimal to decimal and then with %b, convert it to binary
printf( "The binary of %d is %b \n", $binary, $binary ); // -> with %d, it will first convert the binary to decimal and then with %b, convert it to binary
printf( "The binary is %b \n", $decimal );

// conversions to hexadecimals (%x -> for lowercase / %X -> for uppercase)
printf( "The hexadecimal of %d is %X \n", $decimal, $decimal ); // -> with %d, it will first convert the decimal to decimal and then with %X/%x, convert it to hexadecimal
printf( "The hexadecimal of %d is %X \n", $octal, $octal ); // -> with %d, it will first convert the octal to decimal and then with %X/%x, convert it to hexadecimal
printf( "The hexadecimal of %d is %X \n", $hexadecimal, $hexadecimal ); // -> with %d, it will first convert the hexadecimal to decimal and then with %X/%x, convert it to hexadecimal
printf( "The hexadecimal of %d is %X \n", $binary, $binary ); // -> with %d, it will first convert the binary to decimal and then with %X/%x, convert it to hexadecimal
printf( "The hexadecimal is %X \n", $decimal );

// conversions to octal
printf( "The octal of %d is %o \n", $decimal, $decimal ); // -> with %d, it will first convert the decimal to decimal and then with %o, convert it to octal
printf( "The octal of %d is %o \n", $octal, $octal ); // -> with %d, it will first convert the octal to decimal and then with %o, convert it to octal
printf( "The octal of %d is %o \n", $hexadecimal, $hexadecimal ); // -> with %d, it will first convert the hexadecimal to decimal and then with %o, convert it to octal
printf( "The octal of %d is %o \n", $binary, $binary ); // -> with %d, it will first convert the binary to decimal and then with %o, convert it to octal
printf( "The octal is %o \n", $decimal );

// conversions of hexadecimal to octal
printf( "The hexadecimal = %x number is equivalent to octal = %o \n", $hexadecimal, $hexadecimal );