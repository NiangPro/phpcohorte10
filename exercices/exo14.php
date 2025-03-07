<?php

$mat = [
    ["Modou", "ba", 34],
    ["Maimouna", "diop", 44],
    ["Penda", "fall", 14],
    ["Pathe", "seck", 24]
];

echo '
    <table border="">
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Age</th>
    </tr>
';

foreach ($mat as $tab) {
    echo '<tr>';
    foreach ($tab as $val) {
        echo '<td>' . $val . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
