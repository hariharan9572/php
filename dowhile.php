<?php

do{
    $diceRoll= rand(1,6);
    echo "You rolled a ".$diceRoll."\n";

    if($diceRoll==6){
        echo "Congrats, you got jackpot\n";
    }
    
    echo "Roll agian? (y/n)";

    $rollAgain=trim(fgets(STDIN));
} while($rollAgain== "y");
