<?php 
session_start();

require_once("models/fonctions.php");
require_once("models/database.php");


$cats = recupererToutesLesCategories();
require_once("views/includes/entete.php");

// routeur 
if (isset($_GET["page"])) {
    # code...
    if ($_GET["page"] == "home") {
        require_once("controllers/homeController.php");
    }else if($_GET["page"] == "categorie"){
        require_once("controllers/categorieController.php");
    }else if($_GET["page"] == "produit"){
        require_once("controllers/produitController.php");
    }else if($_GET["page"] == "detailproduit"){
        require_once("controllers/detailProduitController.php");
    }else if($_GET["page"] == "connexion"){
        require_once("controllers/loginController.php");
    }else if($_GET["page"] == "inscription"){
        require_once("controllers/registerController.php");
    }else if($_GET["page"] == "deconnexion"){
        require_once("controllers/logoutController.php");
    }else{
        require_once("controllers/homeController.php");
    }
}else{
    require_once("controllers/homeController.php");
}



require_once("views/includes/pied.php");






   
    
