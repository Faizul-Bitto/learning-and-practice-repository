<?php

// if the variables are declared with the keyword 'static'
class Father {
    public static $num1 = 100;
    public static $num2 = 100;
}

class Son extends Father {
    public function addTwoNumbers() {
        // then to access the properties of the parent class in child class, we use the keyword parent and :: (Scope Resolution Operator) -> (parent::$property)
        $sum = parent::$num1 + parent::$num2;
        echo $sum;
    }
}

$sonObject = new Son();
$sonObject->addTwoNumbers();