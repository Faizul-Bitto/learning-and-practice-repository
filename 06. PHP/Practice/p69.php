<?php

// class is a blueprint where we organize our codes and classes increase the reusability of our codes
// we initialize a class with a keyword called 'class'
// all the variables/functions or declared inside the class are called 'properties'
class Person {

    // to declare variables in the class, we use the keywords 'public'/'private'/'protected' or 'Access Modifiers'
    public $firstName = "John";
    public $lastName = "Doe";

    // same goes for functions. To declare functions in the class, we use the keywords 'public'/'private'/'protected' or 'Access Modifiers'
    public function getName() {

        // to use the declared properties in the class, inside that same class, we use the keyword '$this'. '$this->property'
        $fullName = $this->firstName . " " . $this->lastName;
        echo $fullName;
    }
}

// now the class is declared, the blueprint is created, but to get the output from the blueprint/class we create a object with a keyword 'new'
$object = new Person();
// from the created object, which is stored in the variable, if we want to now access the 'firstName' variable or 'getName' method of the class, we use the keyword '->'. Imagine like we are pulling out (টান মারা) that function from the '$object' variable which is holding the object of the class
echo $object->firstName;
echo "\n";
$object->getName();
echo "\n";

// and we can make multiple objects as well if we want
$object2 = new Person();
$object2->getName();
echo "\n";

$object3 = new Person();
$object3->getName();
echo "\n";