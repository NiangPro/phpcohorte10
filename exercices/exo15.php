<?php
/*Mini-projet : Gestion des étudiants*

Vous allez développer un petit programme PHP pour gérer une liste d’étudiants et leurs notes.
 L’objectif est de structurer les données à l’aide de tableaux associatifs et de les manipuler 
 efficacement.

Étape 1 : Déclaration des données

Créer un tableau contenant plusieurs étudiants, chacun ayant :
	•	Un nom
	•	Un prénom
	•	Un tableau de 3 notes sur 20 chacune 

Étape 2 : Organisation des données

Mettre en place une structure permettant d’accéder facilement aux informations de chaque étudiant.

Étape 3 : Traitement des données
	•	Parcourir les étudiants pour extraire leurs informations.
	•	Formater les noms en majuscules.
	•	Ajouter une colonne pour déterminer la moyenne des notes de chaque étudiant.

Étape 4: Affichage des résultats par ordre de mérite (moyenne).

Structurer une sortie lisible avec toutes les informations traitées. */

$etudiants = [
    [
        "prenom" => "Adama",
        "nom" => "Diop",
        "notes" => [18,  5, 13]
    ],
    [
        "prenom" => "Fatou",
        "nom" => "Ndiaye",
        "notes" => [8,  15, 18]
    ],
    [
        "prenom" => "Mouhamet",
        "nom" => "Fall",
        "notes" => [18,  16, 13]
    ],
    [
        "prenom" => "Aliou",
        "nom" => "Diallo",
        "notes" => [5,  20, 18]
    ]
];

foreach ($etudiants as &$etudiant) {
    $etudiant["nom"] = strtoupper($etudiant["nom"]);
    $moyenne = array_sum($etudiant["notes"]) / count($etudiant["notes"]);
    $etudiant["moyenne"] = number_format($moyenne, 2, ",", " ");
}


for ($i = 0; $i < count($etudiants) - 1; $i++) {
    for ($j = $i + 1; $j < count($etudiants); $j++) {
        if ($etudiants[$i]["moyenne"] < $etudiants[$j]["moyenne"]) {
            $tmp = $etudiants[$i];
            $etudiants[$i] = $etudiants[$j];
            $etudiants[$j] = $tmp;
        }
    }
}

echo '<pre>';

// print_r($etudiants);
echo '</pre>';

echo '
    <table border="">
        <tr>
          <th>Prenom</th>
          <th>Nom</th>
          <th>Moyenne</th>
          <th>Rang</th>
        </tr>
';

for ($i = 0; $i < count($etudiants); $i++) {
    echo '<tr>
        <td>' . $etudiants[$i]["prenom"] . '</td>
        <td>' . $etudiants[$i]["nom"] . '</td>
        <td>' . $etudiants[$i]["moyenne"] . '</td>
        <td>' . $i + 1 . '</td>
    </tr>';
}


echo '</table>';
