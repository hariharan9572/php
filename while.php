<?php

$secret = "magic";

$attempts =0;

$maxAttempt =5;

while($attempts<$maxAttempt){
    echo "Guess the password\n";
    $guess= trim(fgets(STDIN));
    $attempts++;

    if($guess==$secret){
        echo "Correct, You have unlocked the tressure!\n";
        break;
    }elseif($attempts==$maxAttempt){
        echo "Sorry, you have run out of attempts\n";
    }else{
        echo "Wrong, try again, you have remaining ".($maxAttempt-$attempts)."  attempts\n";
    }
}