<?php 

$n =6;

echo sqrt(5)."<br>";

$nbre_de_diviseurs = 0;

for ($i=1; $i <= $n ; $i++) { 
    if ($n % $i == 0) {
        $nbre_de_diviseurs++;
    }
}

if ($nbre_de_diviseurs == 2 || $n == 1) {
    echo "$n est un nombre premier";
}else{
    echo "$n n'est pas un nombre premier car le nombre de diviseurs est egal a $nbre_de_diviseurs";
}