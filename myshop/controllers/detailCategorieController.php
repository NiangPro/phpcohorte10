<?php 

if(isset($_GET["idcat"])){
    $cat = recupererUneCategorie($_GET["idcat"]);
}else if(!isset($_GET["idcat"])){
    return header("Location:?page=home");
}

if (!$cat) {
    return header("Location:?page=home");
}

$produits = recupererTousLesProduitsSimilaires($cat->id);


require_once("views/includes/entete.php");

require_once("views/detailCategorie.php");