<?php

/* Update hello so that it returns the string "hello name". Also add parameter and return types. */

declare(strict_types=1);

// add parameter and return types
function hello($name)
{
    return "hello {$name}";
};

var_dump(hello("alice")); // string(11) "hello alice"
var_dump(hello("bob")); // string(9) "hello bob"
