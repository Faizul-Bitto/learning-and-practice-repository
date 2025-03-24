<?php

// if we use the keyword 'abstract' before the parent class, this class's properties and methods will be declared as abstract. So, we can't create an object from this class and its properties and methods. But the inherited class of this, can access the properties and methods of this abstract class.

abstract class Father {
    public $num1 = 10;
    public $num2 = 10;
    public function addTwoNumbers() {
        $sum = $this->num1 + $this->num2;
        echo $sum;
    }
}

// will show error and won't work, as we can't create an object from this abstract class
// $fatherObject = new Father();
// $fatherObject->addTwoNumbers();

// but we can create an object from the inherited class
class Son extends Father {

}

$sonObject = new Son();
$sonObject->addTwoNumbers();