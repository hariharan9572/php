<?php

$superhero = "Superman";  //global variable

function revealIdentity(){
    global $superhero;
    $message = "real name is Clark Kent";   //local variable
    // $superhero = "Spiderman";
    echo "$superhero $message\n";
}

revealIdentity();
echo $superhero . "\n";

function countVisitors(){
    static $visitorCount = 0;  //static variable
    $visitorCount++;

    echo "Visitor #$visitorCount has arrived!\n";
}

countVisitors();
countVisitors();
countVisitors();


// function getDb(){
//     static $db;

//     if ($db === null){
//         $db = connect();
//     }

//     return $db;
// }