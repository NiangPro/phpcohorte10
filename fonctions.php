<?php

function direBonjour()
{
    echo "<br>Bonjour tout le monde<br>";
}

function bonjourA($prenom)
{
    echo "<br>Bonjour $prenom<br>";
}


function somme($a, $b): float
{
    return $a + $b;
}

function addition($a, $b)
{
    echo "<br>$a + $b = " . ($a + $b) . "<br>";
}

$tableMultiplication = function ($nbre) {
    if ($nbre > 0) {
        echo "<br> La table de multiplication de $nbre est : <br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$nbre x $i = " . ($nbre * $i) . "<br>";
        }
    } else {
        echo "<br> Impossiblie de generer la table de multiplication de $nbre";
    }
};


// echo somme(8, 9);
