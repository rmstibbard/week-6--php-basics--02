<?php

declare(strict_types=1);

function wow(int $n): string
{
    $output = "W";

    for ($i = 1; $i <= $n; $i += 1) {
        $output .= "o";
    }

    $output .= "w";
    return $output;
}

var_dump(wow(12)); // string(14) "Woooooooooooow"
var_dump(wow(4)); // string(6) "Woooow"
