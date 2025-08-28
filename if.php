<?php

$x = 10;

if ($x > 5){
    echo "x is greater than 5\n";
}

$score = 60;

if ($score >= 90){
    echo "A";
} elseif($score >= 80){
    echo "B";
} elseif($score >= 70){
    echo "c";
} elseif($score >= 60){
    echo "D";
} else {
    echo "F";
}

$num = -3;

if ($num > 0){
    if ( $num % 2 == 0) {
        echo "\nPostive even number\n";
    } else {
        echo "\npositive odd number\n";
    }
} else {
    echo "\nNon-positive number\n";
}

$username = "admin";

$password = "password123";

if ($username == "admin" && $password == "password123"){
    echo "Success";
} else {
    echo "Failure";
}