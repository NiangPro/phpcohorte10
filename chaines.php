<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $chaine = "   Ma Chaine de caracteres   ";

    $tel = "7764747747 dfghj";

    echo $tel;

    $chaine = trim($chaine);
    echo "Le nombre de caracteres est de : " . strlen($chaine) . " caracteres <br>";
    echo "Le dernier caracteres est de : " . $chaine[strlen($chaine) - 1] . "<br>";
    echo "Le nombre de mots: " . str_word_count($chaine) . "<br>";
    echo ucfirst($chaine) . "<br>";
    echo strtolower($chaine) . "<br>";
    echo strtoupper($chaine) . "<br>";
    echo lcfirst($chaine) . "<br>";

    echo  substr($chaine, 3, 6);

    echo strrev($chaine);

    if (ctype_digit($tel)) {
        echo "happy :)";
    } else {
        echo "unhappy";
    }

    $nom = "balla";

    if (str_starts_with($nom, "bo")) {
        echo "<br>exact";
    } else {
        echo "<br> erreur";
    }

    if (str_ends_with($nom, "las")) {
        echo "<br>exact";
    } else {
        echo "<br> erreur";
    }

    ?>

</body>

</html>