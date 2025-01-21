<?php

echo "Rocket countdown launch\n";

for ($i=10;$i>0;$i--){
    echo $i. "...\n";
    if($i ==1){
        echo "Blast off!\n";
    }sleep(1);
}