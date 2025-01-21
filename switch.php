<?php

$size ="M";


switch($size){
    case "S":
    case "M":
        echo "Small or Medium size\n";
        break;
    case "L":
    case "XL";
        echo "Large or Extra large  size\n";
        break;

    default:
    echo "Unknown size\n";
}


if ($size =="S" || $size=="M"){
    echo "Small or Medium size\n";
}elseif ($size =="L" || $size=="XL"){
    echo "Large or Extra large  size\n";
}else{
    echo "Unknown size\n";
}


$badAttempts=2;

switch($badAttempts){
    case 3:
        echo "You're blocked!\n";
    default:
        echo "bad attempt\n";
}