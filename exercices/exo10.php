<?php

$n = 23;

echo "Les nombres premiers compris entre 1 et $n sont :<br>";
// on parcourt de 1 a n 
for ($i = 1; $i < $n; $i++) {
    // on teste pour chaque indice est ce que c'est premier ou pas
    // connaitre le nombre de diviseur pour chaque indice 
    $cpt = 0;
    for ($j = 1; $j <= $i; $j++) {
        // compter les diviseurs 
        if ($i % $j == 0) {
            $cpt++;
        }
    }

    // on teste si le nombre de diviseurs est egal 2 ou 1 
    if ($cpt == 1 || $cpt == 2) {
        echo " $i - ";
    }
}
