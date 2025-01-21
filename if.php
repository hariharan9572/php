<?php

$x=10;

if($x>5){
    echo "x is greater than 5\n";
}


$scores=60;

if ($scores>=90){
    echo "A\n";
} elseif ($scores>=80){
    echo "B\n";
}elseif ($scores>=70){
    echo "C\n";
}elseif ($scores>=60){
    echo "D\n";
}else{
    echo "F\n";
}


$num=-16;

if ($num>0){
    if($num%2==0){
        echo "Positive Even Number\n";
    }else{
        echo "Positive Odd Number\n";
    }
} else {
    echo "Non-Positive Integer\n";
}

$username= "admin";
$password= "password123";

if ($username=="admin" && $password=="password123"){
    echo "Success";
} else {
    echo "Failed";
}