<?php 

if (isset($_GET["id"])) {
    $produit = recupererUnProduit($_GET["id"]);
}else{
    return header("Location:?page=home");
}

if (isset($_GET["type"]) && $_GET["type"] == "addpanier") {
   
    if (isset($_SESSION["user"])) {
        if (ajouterAuPanier($produit->id, $_SESSION["user"]->id, 1, $produit->prix *1)) {
            setmessage("produit ajoute avec succes");
        }

        return header("Location:?page=detailproduit&id=".$produit->id);

    }else{
        setmessage("Veuillez d'abord vous connecter", "warning");
    }
}

$prodSimilaires = recupererTousLesProduitsSimilaires($produit->categorie_id);


require_once("views/includes/entete.php");

require_once("views/detailProduit.php");