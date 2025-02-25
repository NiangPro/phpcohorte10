<?php

$tab = ["Modou", 23, true, 3.14];


$entiers = array(23, 45, 45);


echo "Premier element: " . $tab[0] . "<br>";
echo "Nombre d'elements du tableau: " . count($tab) . "<br>";
echo "Dernier element: " . $tab[count($tab) - 1] . "<br>";

// insertion 
array_unshift($tab, "Moussa");
array_push($tab, "Mouhamet");
array_splice($tab, 0, 1, "Pathe");

array_splice($tab, 1, 0, "Bassirou");

// suppression 
array_splice($tab, 4, 2);
array_pop($tab);
$first = array_shift($tab);

echo "L'element supprime: " . $first . "<br>";

echo "Nombre d'elements du tableau: " . count($tab) . "<br>";

// parcours d'un tableau 
foreach ($tab as $i => $val) {

    echo $i . " => " . $val . " * ";
}


// afficher l'etat actuel du tableau 
print_r($tab);
