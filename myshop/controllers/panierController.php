<?php 

if (!isset($_SESSION["user"])) {
    return header("Location:?page=home");
}


if ($_SESSION["user"]->role != "client") {
    return header("Location:?page=home");
}

if (isset($_GET["delete"])) {
    if (supprimerUnProduitDansLePanier($_GET["delete"])) {
        setmessage("Produit supprimé avec succès");
    }else{
        setmessage("Erreur de suppression", "danger");
    }

    return header("Location:?page=panier");
}

$pans = recupererLesInfosDuPanier($_SESSION["user"]->id);

require_once("views/includes/entete.php");

require_once("views/panier.php");
