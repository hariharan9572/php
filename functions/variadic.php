<?php 

function add (...$numbers){
    $sum=0;

    foreach($numbers as $number){
        $sum+= $number;
    }
    return $sum;
}

echo add(1,5)."\n";
echo add(2,3,6,4,4,5,67,5,7)."\n";


$number=[1,2,3];

echo add(...$number)."\n";


function introduceTeam($teamName, ...$members){
    echo "Team: $teamName \n";
    echo "Members:" .implode(", ", $members)."\n";
}


introduceTeam("Team A", "Alice", "Bob", "Charlie");


$members=["Hari", "Mohan", "Naveen"];

echo introduceTeam("Team B", ...$members);