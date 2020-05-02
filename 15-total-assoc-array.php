<?php

/* Create a function, total, that takes an array of shopping item associative arrays and adds their price together. */

declare(strict_types=1);

function total(array $items): float
{
    $total = 0;

    for ($i = 0; $i < count($items); $i += 1) {
        $total = $total + $items[$i]["price"];
    }
    return $total;
};

$shoppingList = [[
    "name" => "coffee",
    "price" => 3.50,
], [
    "name" => "tea",
    "price" => 2.50,
], [
    "name" => "toblerone",
    "price" => 3.20,
], [
    "name" => "newspaper",
    "price" => 0.10,
]];

var_dump(
    total($shoppingList), // float(9.3)
);
