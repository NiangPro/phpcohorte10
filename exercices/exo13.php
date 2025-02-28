<?php

$tab = [23, -5, 16, 22, 4, 26, 28, 13, 9, 15, 25, 32, 11];

$premiers = [];
$parfaits = [];
$carres = [];

foreach ($tab as $valeur) {
    // si le nombre est positif 
    if ($valeur > 0) {
        $cpt = 0;
        $som = 0;
        // chercher le nombre de diviseurs 
        for ($i = 1; $i < $valeur; $i++) {
            if ($valeur % $i == 0) {
                $cpt++;
                $som = $som + $i;
            }
        }

        // si le nombre est premier 
        if ($cpt == 1 || $valeur == 1) {
            $premiers[] = $valeur;
        }

        // si le nombre est parfait 
        if ($som == $valeur) {
            $parfaits[] = $valeur;
        }

        // si le nombre est un nombre carre 
        if ($valeur == (intval(sqrt($valeur)) * intval(sqrt($valeur)))) {
            $carres[] = $valeur;
        }
    }
}


echo "Les nombres premiers sont: <br>";
print_r($premiers);
echo "<br>Les nombres parfaits sont: <br>";
print_r($parfaits);
echo "<br>Les nombres carres sont: <br>";
print_r($carres);
