<?php

class Person {

// attributes
    private $name;
    private $age;

// constructor
    public function __construct( $name, $age ) {
        $this->name = $name;
        $this->age = $age;
    }

// method
    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.";
    }
}

// Example:
$person = new Person( "John", 30 );
$person->introduce();