<?php 

$age = "19";
$note = 12;
$prenom = "bassirou";

// unset($age);

settype($age, "integer");
echo gettype($age);

if (isset($age)) {
    if($age >= 18 && $note >= 10){
        echo "Vous etes majeur";
    }else if($age < 18){
        echo "Vous etes mineur";
    }
}else{
    echo "La variable age n'existe pas";
}






