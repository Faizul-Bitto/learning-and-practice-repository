<?php

// constructor declared in both classes
class Father {
    public function __construct() {
        echo "This is father's class constructor";
    }
}

// though constructor declared in parent class, can be accessed in child class automatically, but here both class have their own constructor and if the child class want to access parent's class constructor function, then child class need to use parent:: keyword ( parent::__construct() )
class Son extends Father {

    public function __construct() {

        parent::__construct();
        echo "\n";
        echo "This is son's class constructor";
    }
}

$sonObject = new Son();