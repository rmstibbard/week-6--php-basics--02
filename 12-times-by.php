<?php

/* Create a function, timesBy, that takes an array of numbers and a number as arguments. Return a new array containing each number in the array multiplied by the value of the second argument. */

declare(strict_types=1);

function timesBy($numbers, $multiplier)
{
    $multiplied = [];

    for ($i = 0; $i < count($numbers); $i += 1) {
        array_push($multiplied, ($numbers[$i] * $multiplier));
    }

    return $multiplied;
}

var_dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);
