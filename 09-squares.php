<?php

/* Create a function, squares, that takes an array of numbers as an argument. Return a new array containing the square of each number.
*/

declare(strict_types=1);

function squares(array $values): array
{
    $squared = [];

    for ($i = 0; $i < count($values); $i += 1) {
        array_push($squared, ($values[$i] * $values[$i]));
    }

    return $squared;
};


var_dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);
