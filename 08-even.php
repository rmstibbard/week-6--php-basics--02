<?php

/* Create a function, even, that takes a number as an argument. The function should return true if the number is even and false if it is odd. */

declare(strict_types=1);

function even($a)
{
    return ($a % 2 === 0) ? true : false;
}

var_dump(even(1)); // bool(false)
var_dump(even(2)); // bool(true)
