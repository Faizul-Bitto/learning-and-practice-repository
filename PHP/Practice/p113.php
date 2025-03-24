<?php

// multidimensional associative array
$billGates = [
    ["firstName" => "Bill", "lastName" => "Gates", "age" => 68],
    ["firstName" => "Mark", "lastName" => "Zuckerberg", "age" => 62],
    ["firstName" => "Jeff", "lastName" => "Bezos", "age" => 57],
];

foreach ( $billGates as $person )
{

    foreach ( $person as $key => $value )
    {
        echo "{$key} : {$value} \n";
    }

}
