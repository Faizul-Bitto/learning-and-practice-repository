<?php

class Father {
    public $num1 = 100;
    public $num2 = 100;
}

class Son extends Father {
    public function addTwoNumbers() {
        // to access the properties of the parent class in child class, we use the keyword '$this'
        $sum = $this->num1 + $this->num2;
        echo $sum;
    }
}

$sonObject = new Son();
$sonObject->addTwoNumbers();
