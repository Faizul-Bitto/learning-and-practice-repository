<?php

// constructor declared in both classes
class Father {
    public function __construct() {
        echo "This is father's class constructor";
    }
}

class Son extends Father {
    public function __construct() {
        echo "This is son's class constructor";
    }
}

$fatherObject = new Father();
echo "\n";
$sonObject = new Son();
