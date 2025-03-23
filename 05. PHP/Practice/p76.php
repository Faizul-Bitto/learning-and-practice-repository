<?php

class greetings {

    // if any function is declared with the keyword 'static', it belongs to the class, not the object. So, to call the function, we don't need to declare a object first. We can directly call it with (:: Scope Resolution Operator)
    public static function sayHello() {
        echo "Hello World!";
    }
}

greetings::sayHello();