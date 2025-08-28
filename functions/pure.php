<?php

function add(int $a, int $b){
    return $a + $b;
}

var_dump(add(5, 2), add(5, 2));

$total =0;

function addToTotal($value){
    global $total;
    $total += $value;

    return $total;
}

var_dump(addToTotal(5), addToTotal(5));

