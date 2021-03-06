<?php

/* Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.
Hint: stick to things you've been taught and try not to Google/Stack Oveflow it */

declare(strict_types=1);

// Avoiding use of array_intersect
// but does not remove duplicate values
function both(array $array1, array $array2): array
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
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);
