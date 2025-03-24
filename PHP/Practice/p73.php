<?php

class Father {

    function addTwoNumbers() {

        $num1 = 100;
        $num2 = 100;
        $sum = $num1 + $num2;
        echo $sum;
    }
}

// its possible to change the value in the inherited class, but the parent class will remain the same
class Son extends Father {

    // we are changing the method 'addTwoNumbers()' here and changing the values, its called method overriding
    function addTwoNumbers() {
        $num1 = 100;
        $num2 = 200;
        $sum = $num1 + $num2;
        echo $sum;
    }
}

$sonObject = new Son();
$sonObject->addTwoNumbers();
echo "\n";

$fatherObject = new Father();
$fatherObject->addTwoNumbers();