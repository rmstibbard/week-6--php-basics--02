<?php

/* Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.
Hint: stick to things you've been taught and try not to Google/Stack Oveflow it */

declare(strict_types=1);


// 1. Using built-in array_intersect:
function both1($array1, $array2)
{
    return array_intersect($array1, $array2);  // I already knew this (no Google) so it was extremely hard not to use it!
}


// 2. But here we go with nested loops ...:
function both2($array1, $array2)
{
    $answers = [];
    for ($i = 0; $i < count($array1); $i += 1) {
        for ($j = 0; $j < count($array2); $j += 1) {
            if ($array1[$i] === $array2[$j]) {
                $answers[] = $array1[$i];
            }
        }
    }

    return $answers;
}

var_dump(
    both1([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
    both2([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);
