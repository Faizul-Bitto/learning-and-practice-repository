<?php

// if we can declare any property which can be executed by itself without being called is 'Constructor', in php its a function called '__construct()'
class Car {

    public function __construct() {
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2;
        echo $sum;
    }
}

// now we need to just create an object
$obj = new Car();
// here we are not accessing __construct function by calling like this ($obj->__construct()), without using it the function is called automatically