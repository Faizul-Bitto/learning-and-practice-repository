<?php

// Celsius to Fahrenheit

$temperatureInCelsius = 32;

$celsiusToFahrenheit = ( ( $temperatureInCelsius * 9 ) / 5 ) + 32;
printf( "The converted value of %d degree Celsius temperature in Fahrenheit is: %.2f degree.", $temperatureInCelsius, $celsiusToFahrenheit );
