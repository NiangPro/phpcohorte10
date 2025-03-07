<?php


$etudiants = [
    [
        "prenom" => "Aliou",
        "nom" => "Diallo",
        "notes" => [9, 10, 8]
    ],
    [
        "prenom" => "Modou",
        "nom" => "Ba",
        "notes" => [12, 9, 18]
    ],
    [
        "prenom" => "Bassirou",
        "nom" => "Niang",
        "notes" => [19, 20, 18]
    ],
];


foreach ($etudiants as &$etudiant) {
    echo array_sum($etudiant["notes"]);
    $etudiant["moyenne"] = array_sum($etudiant["notes"]) / count($etudiant["notes"]);
}

print_r($etudiants);
echo $etudiants[0]["moyenne"];
