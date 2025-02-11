<?php 

    $valeur1 = 34;
    $valeur2 = 6;
    
    $somme = $valeur1 + $valeur2;
    $difference = $valeur1 - $valeur2;
    $produit = $valeur1 * $valeur2;
    $divDeci = $valeur1 / $valeur2;

    $divEntier = intval($divDeci);

    $reste = $valeur1 % $valeur2;

    echo "$valeur1 + $valeur2 = $somme <br>";
    echo "$valeur1 - $valeur2 = $difference <br>";
    echo "$valeur1 x $valeur2 = $produit <br>";
    echo "$valeur1 / $valeur2 = $divDeci <br>";
    echo "$valeur1 div $valeur2 = $divEntier <br>";
    echo "$valeur1 modulo $valeur2 = $reste <br>";


    echo $valeur1.' + '.$valeur2.' = '.$somme.'<br>';