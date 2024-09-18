<?php

class Father {

}

// constructor declared in the child class
class Son extends Father {
    public function __construct() {
        echo "This is son's class constructor";
    }
}

$sonObject = new Son();