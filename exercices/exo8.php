<?php 

$n = 23;

if ($n>=2) {
    // for ($i=2; $i < $n ; $i+=2) { 
    //     echo "$i -";
    // }

    for ($i=1; $i < $n ; $i++) { 
        if ($i % 2 == 0) {
            echo "$i -";
        }
    }
}else{
    echo  "Aucun nombre pair";
}