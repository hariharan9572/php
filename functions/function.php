<?php

function greet ($name){
    return "Hello, $name!\n";
}

echo greet("Hari");

function greetWithTime ($name, $time = "day"){
    return "Good $time, $name!\n";  
}

echo greetWithTime("Hari");
echo greetWithTime("Bob", "evening");