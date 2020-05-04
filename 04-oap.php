<?php

/* Create a function, oap, that takes an associative array with an age property. It should return true if the age property is greater than 65 otherwise it should return false.
*/

declare(strict_types=1);

function oap($peep): bool
{
    return ($peep["age"] > 65) ? true : false;
}

$a = ["name" => "Alice", "age" => 52];
$b = ["name" => "Bob", "age" => 67];
$c = ["name" => "Charlie", "age" => 24];
$d = ["name" => "Bob", "age" => 97];

var_dump(
    oap($a), // false
    oap($b), // true
    oap($c), // false
    oap($d), // true
);
