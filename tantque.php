<?php 

for ($i=1; $i <= 10 ; $i++) { 
    echo "$i - ";
}

echo "<br>";
// initialisation 
$i = 1;

while($i <= 10){
    // traitements 
    echo "$i - ";

    // incrementation 
    $i++;
}

echo "<br>";

// $a = 12;
do{
    echo "$i -";

    $i++;
}while($i <= 20);