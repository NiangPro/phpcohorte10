<?php

$mat = [
    ["Modu", "ba", 34],
    ["Maimouna", "diop", 44],
    ["Penda", "fall", 14],
    ["Pathe", "seck", 24]
];


foreach ($mat as $tab) {
    foreach ($tab as $valeur) {
        echo "$valeur -";
    }
    echo "<br>";
}


for ($i = 0; $i < count($mat); $i++) {
    for ($j = 0; $j < count($mat[$i]); $j++) {
        echo $mat[$i][$j] . " * ";
    }
    echo "<br>";
}
