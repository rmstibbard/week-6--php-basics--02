<?php

/* Create a function, double, that takes an array of numbers as an argument. Return a new array containing each number doubled.
*/

declare(strict_types=1);

function double(array $values): array
{
    $doubled = [];

    for ($i = 0; $i < count($values); $i += 1) {
        array_push($doubled, ($values[$i] * 2));
    }

    return $doubled;
};

var_dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);
