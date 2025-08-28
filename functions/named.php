<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string{
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Hari") . "\n";
echo greet("Hari", "Hi") . "\n";
echo greet("Hari", "Hey", true) . "\n";

echo greet(name: "Divya", shout: false);