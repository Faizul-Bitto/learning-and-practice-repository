<?php

// We can compare this to the relationship between a father and a child. Just like a child inherits his father's property. Same happens here.
class Father {

    function addTwoNumbers() {

        $num1 = 100;
        $num2 = 100;
        $sum = $num1 + $num2;
        echo $sum;
    }
}

// A class can access another class's properties and methods if we can inherit the class. For that, we use 'extends' keyword
class Son extends Father {

}

$sonObject = new Son();
$sonObject->addTwoNumbers();
echo "\n";
// even though the 'addTwoNumbers' method is created in the Father class, it can be accessed in the Son class, because by extends keyword the Son class inherits the Father class and got all the properties and methods of the Father class

// its also possible to access the properties and methods of the Father class from the Father class with father object
$fatherObject = new Father();
$fatherObject->addTwoNumbers();