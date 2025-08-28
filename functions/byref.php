<?php

function doubleValue(int &$number){
    $number *= 2;
    return $number;
}

$original = 5;
doubleValue($original);

var_dump($original);