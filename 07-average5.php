<?php

/* Create a function, average5, that takes five numbers as arguments. The function should return the average of the numbers. */

declare(strict_types=1);

function average5($a, $b, $c, $d, $e): float
{
    return ($a + $b + $c + $d + $e) / 5;
}

var_dump(average5(1, 2, 3, 4, 5)); // float(3)
