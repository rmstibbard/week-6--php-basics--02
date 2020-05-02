<?php

/* Create a function, largest, that takes an array of numbers. Return the largest number. */

declare(strict_types=1);

function largest($values)
{
    $largestNumber = $values[0];

    for ($i = 0; $i < count($values); $i += 1) {
        if ($values[$i] > $largestNumber) {
            $largestNumber = $values[$i];
        }
    }

    return $largestNumber;
}


var_dump(
    largest([2, 4, 6, 4, 7, 5]), // int(7)
    largest([-2, 4, 6, 4, 2, -7, 5]), // int(6)
    largest([-2, -4, -4, -7, -5]), // int(-2)
);
