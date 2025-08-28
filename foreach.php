<?php

$basket = [
    'apple' => 5,
    'banana' => 4
];

$total = 0;

foreach ($basket as $item => $quantity){
    echo "$item : $quantity\n";
    $total += $quantity;
}

echo "Total items: $total\n";