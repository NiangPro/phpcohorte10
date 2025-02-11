
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Veuillez entrer la note</label>
        <input type="number" min="0" name="note">
        <button type="submit" name="valider">Valider</button>
    </form>

    <?php 

    if (isset($_POST["valider"])) {
        extract($_POST);

        if ($note >= 0 && $note < 10) {
            echo "Echec";
        }elseif($note >= 10 && $note <= 12){
            echo "Passable";
        }elseif($note >= 13 && $note <= 15){
            echo "Assez bien";
        }elseif($note >= 16 && $note <= 18){
            echo "Bien";
        }elseif($note >= 19 && $note <= 20){
            echo "Tres bien";
        }else{
            echo "La note doit etre comprise entre 0 et 20";
        }
        
    }
    ?>
</body>
</html>
