<?php

class Car {

    public function __construct( $num3, $num4, $num5 ) {
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
        echo $sum;
    }
}

// to use parameters in the constructor, we need to send the arguments in the parenthesis : 'Car(arguments)'
$obj = new Car( 10, 20, 30 );