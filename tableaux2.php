<?php


$personne = [
    "prenom" => "Seynabou",
    "nom" => "Diallo",
    "age"  => 45
];

$compteur = 0;
foreach ($personne as $pos => $p) {
    echo ucfirst($pos) . " : $p <br>";

    if (strchr($p, "a")) {
        $compteur++;
    }
}


echo "Le nombre de valeurs qui ont le caractere <q> a</q> est de $compteur <br>";


$keys = array_keys($personne);
$values = array_values($personne);

if (in_array("sexe", $keys)) {
    echo "exact";
} else {
    echo "not found";
}

print_r($values);
