<?php 

$n = 12;

$quotient = $n;
$reste = 0;

while($quotient != 0){
    $reste += $quotient % 10;
    $quotient = intval($quotient / 10);
}

echo "La somme des chiffres de $n est de $reste";