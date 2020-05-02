<?php

/* Create a function, average, that takes an array of numbers as an argument. Return the average value of all the numbers. */

declare(strict_types=1);

function average($values)
{
    $total = 0;
    for ($i = 0; $i < count($values); $i += 1) {
        $total += $values[$i];
    }
    return $total / count($values);
}
var_dump(
    average([2, 3, 4, 5, 6]), // float(4)
    average([2, 3]), // float(2.5)
    average([10, 30]), // float(20)
    average([-4, -8, -9]), // float(-7)
);
