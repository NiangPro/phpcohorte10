<?php 

//traitement
if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img_name = uniqid().".jpg";
    $img = $_FILES["image"]["tmp_name"];

    if (ajouterUnProduit($_POST["nom"], $prix, $qtestock, $img_name, $description, $categorie_id)) {
        if($_FILES["image"]["size"] > 0){
            move_uploaded_file($img, "images/".$img_name);
        }

        return header("Location:?page=produit");
    }

}


//variables
$categories = recupererToutesLesCategories();
$produits = recupererTousLesProduits();


require_once("views/includes/entete.php");

//redirection
if (isset($_GET["type"])) {
    require_once("views/produit/ajout.php");
}else{

    require_once("views/produit/produit.php");
}
