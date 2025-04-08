<?php 

if (isset($_SESSION["user"])) {
    if ($_SESSION["user"]->role != "admin") {
        return header("Location:?page=home");
    }
}else{
    return header("Location:?page=home");
}

// traitements
if(isset($_POST["ajouter"])){
    extract($_POST);
    if (ajouterUneCategorie($nom)) {
        return header("Location:?page=categorie");
    }
}

if (isset($_GET["idcategorie"])) {
    if (supprimerUneCategorie($_GET["idcategorie"])) {
        return header("Location:?page=categorie");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (modifierUneCategorie($_GET["id"], $nom)) {
        return header("Location:?page=categorie");
    }
}


//variables
$categories = recupererToutesLesCategories();

require_once("views/includes/entete.php");


//inclusion des pages views
if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $c = recupererUneCategorie($_GET["id"]);
    }
    require_once("views/categorie/ajout.php");
}else{
    require_once("views/categorie/categorie.php");
}