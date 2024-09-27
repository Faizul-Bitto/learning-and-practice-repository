<?php

class Father {

    function addTwoNumbers() {

        $num1 = 100;
        $num2 = 100;
        $sum = $num1 + $num2;
        echo $sum;
    }
}

class Son extends Father {

}

$sonObject = new Son();
$sonObject->addTwoNumbers();
echo "\n";

$fatherObject = new Father();
$fatherObject->addTwoNumbers();