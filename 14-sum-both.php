<?php

/*Create a function, sumBoth, that takes two arrays of numbers as arguments. Return the sum of all the numbers from both arrays.

Hint: to avoid repeating code, you might want to write a sum function that adds up the values in a single array and call that inside sumBoth */

declare(strict_types=1);

// function sum($values)
// {
//     return array_sum($values); // Using built-in array_sum
// }

function sum(array $values): int
{
    $total = 0;
    for ($i = 0; $i < count($values); $i += 1) {
        $total = $total + $values[$i]; // Without using built-in array_sum
    }
    return $total;
}

function sumBoth(array $values1, array $values2): int
{
    return sum($values1) + sum($values2);
}

var_dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
);
