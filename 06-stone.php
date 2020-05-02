<?php

/*Create a function, stone, that takes a weight in kg and converts it to stone */

declare(strict_types=1);

function stone($kg)
{
    return $kg * 0.15747;
}

var_dump(
    stone(74), // float(11.65278)
    stone(50), // float(7.8735)
);
