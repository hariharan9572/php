<?php

$secret = "magic";
$attempt = 0;
$maxAttempt = 5;

while ($attempt < $maxAttempt){
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempt++;

    if ($guess == $secret){
        echo "Correct! You've unlocked the treasure! 💎\n";
        break;
    } elseif ( $attempt == $maxAttempt){
        echo "Out of attempts! The treasure remains locked. 🔒\n";
    } else{
        echo "Wrong! Try agian. Attempts left:" . ($maxAttempt - $attempt) . "\n";
    }
}