<?php

$mot = " ici  ";

if (trim(strtolower($mot)) == trim(strtolower(strrev($mot)))) {
    echo "$mot est palyndrome <br>";
} else {
    echo "$mot n'est pas palyndrome <br>";
}

$tel = "784884840";

$ch1 = "modou";
$ch2 = "modou";

if (strcmp($ch1, $ch2) == 0) {
    echo "Identique";
} else {
    echo 'Different';
}

// le numero doit contenir uniquement de chiffres 
if (ctype_digit($tel)) {
    // la taille doit etre egal a 9
    if (strlen($tel) == 9) {
        // il doit commencer par 70, 75, 76, 77, 78, 33 ou 88
        if (str_starts_with($tel, "70") || str_starts_with($tel, "75") || str_starts_with($tel, "76") || str_starts_with($tel, "77") || str_starts_with($tel, "78") || str_starts_with($tel, "33") || str_starts_with($tel, "88")) {
            echo "$tel est valide";
        } else {
            echo "Le numero doit commencer par 70, 75, 76, 77, 78, 33 ou 88 <br>";
        }
    } else {
        echo "la taille doit etre egal a 9";
    }
} else {
    echo "le numero doit contenir uniquement de chiffres <br>";
}
