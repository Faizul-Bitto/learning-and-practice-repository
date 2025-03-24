<?php

$year = 2020;

/*
1. Check if year is divisible by 4
2. Check if year is divisible by 100
3. Check if year is divisible by 400
4. If all above conditions are true, then it's a leap year
5. Otherwise, it's not a leap year
6. Print the result
7. If the year is not divisible by 4, then it's not a leap year
8. If the year is not divisible by 100, then it's a leap year
9. If the year is not divisible by 400, then it's not a leap year
10. Otherwise, it's a leap year
11. Print the result
 */

// Though it works, but not that readable
if ( $year % 4 == 0 ) {
    if ( $year % 100 == 0 ) {
        if ( $year % 400 == 0 ) {
            echo "It's a leap year \n";
        } else {
            echo "It's not a leap year \n";
        }

    } else {
        echo "It's a leap year \n";
    }

} else {
    echo "It's not a leap year \n";
}

// Best way:
if ( $year % 4 == 0 && ( $year % 100 != 0 || $year % 400 == 0 ) ) {
    echo "It's a leap year \n";
} else {
    echo "It's not a leap year \n";
}
