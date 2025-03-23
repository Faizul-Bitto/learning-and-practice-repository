<?php

class Father {

    public function __construct() {
        echo "This is father's class constructor";
    }
}

class Son extends Father {

}

$sonObject = new Son();