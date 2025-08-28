<?php

declare(strict_types = 1);

function add(int $a, int $b):int {
    return $a + $b;
}

// echo add(5, 2);

// var_dump(add("5", 2));

var_dump(add((int)5.0, 2));