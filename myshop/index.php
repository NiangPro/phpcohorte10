<?php 

require_once("models/database.php");
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
    }else{
        require_once("controllers/homeController.php");
    }
}else{
    require_once("controllers/homeController.php");
}



require_once("views/includes/pied.php");






   
    
