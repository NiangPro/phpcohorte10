<?php 

if (isset($_GET["id"])) {
    $produit = recupererUnProduit($_GET["id"]);
}else{
    return header("Location:?page=home");
}

require_once("views/detailProduit.php");