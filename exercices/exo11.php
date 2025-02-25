<?php


// creer un tableau de chaines de caracteres
$chaines = ["bonjour", "mamadou", "pathe", "modou", "alioune"];

// on pourcourt le tableau
foreach ($chaines as $valeur) {
    // on cherche les chaines contenant le caractere "a"
    if (strchr($valeur, "a")) {
        echo "$valeur - ";
    }
}
